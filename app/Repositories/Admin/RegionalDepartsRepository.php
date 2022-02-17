<?php

namespace App\Repositories\Admin;

use App\Models\City;
use App\Models\RegionalDepart;
use MediaUploader;

class RegionalDepartsRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new RegionalDepart();
    }

    public function all()
    {
        $items = $this->entity->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

    public function findById($id)
    {
        return $this->entity->where('id', $id)->with('city')->firstorFail();
    }

    public function store($request)
    {
        $item = $this->entity->create($this->save($request));

        if (isset($request['image'])) {
            $this->fileUpload($request['image'], $item);
        }

        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

        if (isset($request['image'])) {
            $this->fileUpload($request['image'], $item);
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
        $fullname = [
            'uz' => $request['fullname_uz'],
            'oz' => $request['fullname_oz'],
        ];
        $position = [
            'uz' => $request['position_uz'],
            'oz' => $request['position_oz'],
        ];
        $address = [
            'uz' => $request['address_uz'],
            'oz' => $request['address_oz'],
        ];
        return [
            'title' => $title,
            'fullname' => $fullname,
            'position' => $position,
            'address' => $address,
            'phone' => $request['phone'],
            'city_id' => $request['type'],
        ];
    }

    public function cities()
    {
        return City::all();
    }

    public function fileUpload($image, $item)
    {
        $this->media = MediaUploader::fromSource($image)->useFilename(time())->toDirectory('cities')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['cities']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'image' => '/storage/cities/' . $item->getMedia('cities')->first()->filename . '.' . $item->getMedia('cities')->first()->extension
                ]
            );
        }
    }

}


