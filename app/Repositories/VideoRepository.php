<?php

namespace App\Repositories;

use App\Models\Photo;

class VideoRepository
{

    public function __construct()
    {
        $this->entity = new Photo;
    }

    public function all()
    {
        $items = $this->entity->whereNull('logo')->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

}
