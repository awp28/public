<?php

namespace App\Repositories\Admin;

use App\Models\Team;
use MediaUploader;

class TeamsRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new Team();
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
        $fullname = [
            'uz' => $request['fullname_uz'],
            'oz' => $request['fullname_oz'],
        ];
        $department = [
            'uz' => $request['department_uz'],
            'oz' => $request['department_oz'],
        ];
        $position = [
            'uz' => $request['position_uz'],
            'oz' => $request['position_oz'],
        ];
        $biography = [
            'uz' => $request['biography_uz'],
            'oz' => $request['biography_oz'],
        ];
        $reception_days = [
            'uz' => $request['reception_days_uz'],
            'oz' => $request['reception_days_oz'],
        ];

        if ($request['reception_days_uz'] || $request['reception_days_oz']){      // || = or
            $order = 1;
        }else{
            $order = 2;
        }

        return [
            'fullname' => $fullname,
            'department' => $department,
            'position' => $position,
            'biography' => $biography,
            'reception_days' => $reception_days,
            'phone' => $request['phone'],
            'ordered' =>$order
        ];
    }

    public function fileUpload($image, $item)
    {
        $this->media = MediaUploader::fromSource($image)->useFilename(time())->toDirectory('teams')->upload();

        if (!is_null($this->media)) {
            $item->syncMedia($this->media->id, ['team_photos']);
            return $this->entity->where('id', $item->id)->update(
                [
                    'image' => '/storage/teams/' . $item->getMedia('team_photos')->first()->filename . '.' . $item->getMedia('team_photos')->first()->extension
                ]
            );
        }
    }
}


