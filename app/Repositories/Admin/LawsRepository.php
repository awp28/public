<?php

namespace App\Repositories\Admin;

use App\Models\Law;

class LawsRepository
{
    public function __construct()
    {
        $this->entity = new Law;
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

        return $item;
    }

    public function update($request, $id)
    {
        $item = $this->entity->find($id);

        $title = [
            'uz' => $request['title_uz'],
            'oz' => $request['title_oz'],
        ];

        $item->update([
            'title' => $title,
            'url' => $request['url'],
            'type' => $item->type,
        ]);

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
            'url' => $request['url'],
            'type' => $request['type']
        ];
    }
}
