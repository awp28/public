<?php

namespace App\Http\Controllers;

use App\Repositories\ResourceRepository;

class ResourceController extends Controller
{
    private $repo;

    public function __construct(ResourceRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $data = $this->repo->index();
        return view('front.index', compact('data'));
    }

}
