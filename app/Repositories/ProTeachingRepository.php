<?php

namespace App\Repositories;

use App\Models\ProTeaching;

class ProTeachingRepository
{
    public function __construct()
    {
        $this->entity = new ProTeaching();
    }

    public function all()
    {
        $items = $this->entity->orderBy('id', 'desc')->get();
        return $items;
    }

}
