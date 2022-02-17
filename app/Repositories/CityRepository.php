<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository
{

    public function __construct()
    {
        $this->entity = new City();
    }

    public function cities()
    {
        $items = $this->entity->whereNotNull('region_id')->with('regionalDepart')->get();
        return $items;
    }

    public function findById($id)
    {
        $items = $this->entity->where('id', $id)->with('regionalDepart')->get();
        return $items;
    }
}


