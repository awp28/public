<?php

namespace App\Repositories;

use App\Models\OpenItem;

class DocumentRepository
{

    public function __construct()
    {
        $this->entity = new OpenItem();
    }

    public function documents()
    {
        $items = $this->entity->where('type', 2)->withMedia(['documents'])->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

}


