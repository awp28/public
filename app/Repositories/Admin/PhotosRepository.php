<?php

namespace App\Repositories\Admin;

use App\Models\Photo;
use App\Models\PhotoResource;
use MediaUploader;

class PhotosRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new Photo();
    }

    public function all()
    {
        $items = $this->entity::with('photos')->whereNull('video')->orderBy('id', 'desc')->paginate(20);
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

    public function photoUpload($data, $id)
    {
        $model = Photo::find($id);

        $photos = $model->photos()->create([
            'photo_id' => $id,
        ]);

        $logo = null;
        if ($data['image']) {
            $logo = MediaUploader::fromSource($data['image'])->useFilename(time())->toDirectory('child_photo')->upload();

            $photos->syncMedia($logo->id, ['child_photo']);
            $model->photos()->where('id', $photos->id)->update(
                [
                    'child_image' => '/storage/child_photo/' . $photos->getMedia('child_photo')->first()->filename . '.' . $photos->getMedia('child_photo')->first()->extension
                ]
            );
        }

        return $model;
    }

    public function deletePhoto($id)
    {
        PhotoResource::where('id', $id)->delete();
        return back();
    }

    public function fileUpload($image, $item)
    {
        $this->media = MediaUploader::fromSource($image)->useFilename(time())->toDirectory('photos')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['image_photo']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'logo' => '/storage/photos/' . $item->getMedia('image_photo')->first()->filename . '.' . $item->getMedia('image_photo')->first()->extension
                ]
            );
        }
    }

}
