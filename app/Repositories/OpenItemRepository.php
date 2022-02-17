<?php

namespace App\Repositories;

use App\Models\OpenItem;

class OpenItemRepository
{

    public function __construct()
    {
        $this->entity = new OpenItem();
    }

    public function open_items()
    {
        $items = $this->entity->where('type', 1)->withMedia(['open_item'])->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

    public function documents()
    {
        $items = $this->entity->where('type', 2)->withMedia(['documents'])->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

}


