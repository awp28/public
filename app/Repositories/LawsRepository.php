<?php

namespace App\Repositories;

use App\Models\Law;

class LawsRepository
{
    public function __construct()
    {
        $this->entity = new Law;
    }

    public function lawsUZB()
    {
        $items = $this->entity->where('type', 1)->orderBy('id', 'desc')->paginate(15);
        return $items;
    }

    public function dr_presidents()
    {
        $items = $this->entity->where('type', 2)->orderBy('id', 'desc')->paginate(15);
        return $items;
    }

    public function rc_ministers()
    {
        $items = $this->entity->where('type', 3)->orderBy('id', 'desc')->paginate(15);
        return $items;
    }

}
