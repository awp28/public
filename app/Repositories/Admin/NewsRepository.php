<?php

namespace App\Repositories\Admin;

use App\Http\Controllers\Admin\FileController;
use App\Models\News;
use Illuminate\Support\Carbon;
use MediaUploader;

class NewsRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new News;
    }

    public function all()
    {
        $items = $this->entity->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

    public function findById($id)
    {
        return $this->entity->where('id', $id)->firstorFail();
    }

    public function store($request)
    {
        $title = [
            'uz' => $request['title_uz'],
            'oz' => $request['title_oz'],
        ];

        $fc = new FileController();
        $description = [
            'uz' => $fc->storeManual($request['description_uz']),
            'oz' => $fc->storeManual($request['description_oz']),
        ];
        $body = [
            'uz' => $fc->storeManual($request['body_uz']),
            'oz' => $fc->storeManual($request['body_oz'])
        ];

        $item = $this->entity->create([
            'title' => $title,
            'description' => $description,
            'content' => $body,
            'dateTime' => Carbon::parse($request['dateTime'])->format('Y-m-d')
        ]);

        if (isset($request['image'])) {
            $this->logoUpload($request['image'], $item);
        }

        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

        if (isset($request['image'])) {
            $this->logoUpload($request['image'], $item);
        }
        $title = [
            'uz' => $request['title_uz'],
            'oz' => $request['title_oz'],
        ];

        $fc = new FileController();
        $description = [
            'uz' => $fc->updateManual($request['description_uz']),
            'oz' => $fc->updateManual($request['description_oz']),
        ];
        $content = [
            'uz' => $fc->updateManual($request['body_uz']),
            'oz' => $fc->updateManual($request['body_oz']),
        ];

        $item->update([
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'dateTime' => Carbon::parse($request['date'])->format('Y-m-d')
        ]);

        return $item;
    }

    public function delete($id)
    {
        $this->entity->whereId($id)->delete();
    }

    public function logoUpload($image, $item)
    {
        $this->media = MediaUploader::fromSource($image)->useFilename(time())->toDirectory('news')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['image_news']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'image' => '/storage/news/' . $item->getMedia('image_news')->first()->filename . '.' . $item->getMedia('image_news')->first()->extension
                ]
            );
        }
    }

}
