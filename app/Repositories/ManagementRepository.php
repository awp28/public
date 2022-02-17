<?php

namespace App\Repositories;

use App\Models\Management;

class ManagementRepository
{
    public function __construct()
    {
        $this->entity = new Management;
    }

    public function about()
    {
        $items = $this->entity->where('type', 1)->orderBy('id', 'desc')->get();
        return $items;
    }

    public function activity()
    {
        $items = $this->entity->where('type', 2)->orderBy('id', 'desc')->get();
        return $items;
    }

}
