<?php

namespace App\Http\Controllers;

use App\Repositories\DocumentRepository;

class DocumentsController extends Controller
{
    protected $repo;

    public function __construct(DocumentRepository $repo)
    {
        $this->repo = $repo;
    }

    public function document()
    {
        $items = $this->repo->documents();
        return view('front.document.index', compact('items'));
    }
}
