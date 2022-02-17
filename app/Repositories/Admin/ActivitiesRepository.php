<?php

namespace App\Repositories\Admin;

use App\Models\Management;

class ActivitiesRepository
{
    public $media = null;

    public function __construct()
    {
        $this->entity = new Management;
    }

    public function all()
    {
        $items = $this->entity->where('type', 2)->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

    public function findById($id)
    {
        return $this->entity->where('id', $id)->firstorFail();
    }

    public function store($request)
    {
        $item = $this->entity->create($this->save($request));

        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

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
            'type' => 2
        ];
    }
}
