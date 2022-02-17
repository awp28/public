<?php

namespace App\Http\Controllers;

use App\Repositories\OpenItemRepository;

class OpenItemController extends Controller
{
    protected $repo;

    public function __construct(OpenItemRepository $repo)
    {
        $this->repo = $repo;
    }

    public function open_item()
    {
        $open_items = $this->repo->open_items();
        return view('front.openItems.index', compact('open_items'));
    }

    public function document()
    {
        $items = $this->repo->documents();
        return view('front.document.index', compact('items'));
    }

}
