<?php

namespace App\Repositories;

use App\Models\News;

class NewRepository
{

    public function __construct()
    {
        $this->entity = new News;
    }

    public function all()
    {
        $items = $this->entity->orderBy('created_at','desc')->get();
        return $items;
    }

    public function forIndex()
    {
        $all = $this->entity->orderBy('created_at','desc')->take(3)->get();
        return $all;
    }

    public function findById($id)
    {
        $item = $this->entity->where('id', $id)->get();
        return $item;
    }

}
