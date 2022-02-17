<?php

namespace App\Repositories\Admin;

use App\Models\Photo;
use MediaUploader;

class VideosRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new Photo;
    }

    public function all()
    {
        $items = $this->entity->whereNull('logo')->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

    public function findById($id)
    {
        return $this->entity->where('id', $id)->firstorFail();
    }

    public function store($request)
    {
        $item = $this->entity->create($this->save($request));

        if (isset($request['video'])) {
            $this->videoUpload($request['video'], $item);
        }
        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

        if (isset($request['video'])) {
            $this->videoUpload($request['video'], $item);
        }

        $item->update($this->save($request));

        return $item;
    }

    public function delete($id)
    {
        $this->entity->whereId($id)->delete();
    }

    public function save($request)
    {
        $title = [
            'uz' => $request['title_uz'],
            'oz' => $request['title_oz'],
        ];

        return [
            'title' => $title,
        ];
    }

    public function videoUpload($video, $item)
    {
        $this->media = MediaUploader::fromSource($video)->useFilename(time())->toDirectory('videos')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['videos']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'video' => '/storage/videos/' . $item->getMedia('videos')->first()->filename . '.' . $item->getMedia('videos')->first()->extension
                ]
            );
        }
    }

}
