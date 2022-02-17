<?php

namespace App\Repositories;

use App\Models\Team;

class TeamRepository
{

    public function __construct()
    {
        $this->entity = new Team();
    }

    public function leaders()
    {
        $items = $this->entity->where('ordered', 1)->orderBy('id', 'desc')->get();
        return $items;
    }

    public function employees()
    {
        $items = $this->entity->where('ordered', 2)->orderBy('id', 'desc')->get();
        return $items;
    }

}


