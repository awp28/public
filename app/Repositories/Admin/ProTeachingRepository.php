<?php

namespace App\Repositories\Admin;

use App\Models\ProTeaching;
use MediaUploader;

class ProTeachingRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new ProTeaching();
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
        $item = $this->entity->create($this->save($request));

        if (isset($request['logo'])) {
            $this->fileUpload($request['logo'], $item);
        }

        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

        if (isset($request['logo'])) {
            $this->fileUpload($request['logo'], $item);
        }

        $item->update($this->save($request));

        return $item;
    }

    public function delete($id)
    {
        $this->entity->whereId($id)->delete();
    }

    public function save($request): array
    {
        $name_center = [
            'uz' => $request['name_center_uz'],
            'oz' => $request['name_center_oz'],
        ];
        $full_name = [
            'uz' => $request['full_name_uz'],
            'oz' => $request['full_name_oz'],
        ];
        $destination = [
            'uz' => $request['destination_uz'],
            'oz' => $request['destination_oz'],
        ];
        return [
            'name_center' => $name_center,
            'full_name' => $full_name,
            'destination' => $destination,
            'phone' => $request['phone'],
        ];
    }

    public function fileUpload($logo, $item)
    {
        $this->media = MediaUploader::fromSource($logo)->useFilename(time())->toDirectory('pro-teaching')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['pro_teaching_logo']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'logo' => '/storage/pro-teaching/' . $item->getMedia('pro_teaching_logo')->first()->filename . '.' . $item->getMedia('pro_teaching_logo')->first()->extension
                ]
            );
        }
    }

}


