<?php

namespace App\Services\Admin;

use Intervention\Image\Facades\Image;

class FileService
{
    public function storeManual($detail, $directory = 'news')
    {
        $body = $detail;

        $dom = new \DomDocument();

//        @$dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $dom->loadHtml("<html><head><meta charset=\"UTF-8\"><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"></head><body>".$body."</body></html>");
//        dd($dom);


        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {

            $data = $img->getAttribute('src');
            if ($data) {

                list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);

                $data = base64_decode($data);

                $image_name = "/storage/".$directory."/" . time() . $k . '.png';

                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeAttribute('src');

                $img->setAttribute('src', $image_name);
            }

        }

        $detail = $dom->saveHTML();

        return $detail;
    }

    public function updateManual($detail, $directory = 'news')
    {
        $dom = new \DomDocument();

        @$dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            if (preg_match('/data:image/', $src)) {

                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                $filename = uniqid();
                $filepath = "/storage/".$directory."/$filename.$mimetype";

                $image = Image::make($src)
                    ->encode($mimetype, 100)
                    ->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        $detail = $dom->saveHTML();

        return $detail;
    }

}
