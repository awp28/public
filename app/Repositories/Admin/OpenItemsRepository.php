<?php

namespace App\Repositories\Admin;

use App\Models\OpenItem;
use MediaUploader;

class OpenItemsRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new OpenItem();
    }

    public function all()
    {
        $items = $this->entity->where('type', 1)->withMedia(['open_item'])->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

    public function findById($id)
    {
        return $this->entity->where('id', $id)->firstorFail();
    }

    public function store($request)
    {
        $item = $this->entity->create($this->save($request));

        if (isset($request['file'])) {
            $this->fileUpload($request['file'], $item);
        }

        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

        if (isset($request['file'])) {
            $this->fileUpload($request['file'], $item);
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
        $name = [
            'uz' => $request['name_uz'],
            'oz' => $request['name_oz'],
        ];

        return [
            'name' => $name,
        ];
    }

    public function fileUpload($file, $item)
    {
        $this->media = MediaUploader::fromSource($file)->useFilename(time())->toDirectory('openItems')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['open_item']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'file' => '/storage/openItems/' . $item->getMedia('open_item')->first()->filename . '.' . $item->getMedia('open_item')->first()->extension
                ]
            );
        }
    }

}


