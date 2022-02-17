<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    private $repo;

    public function __construct(PhotoRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $items = $this->repo->all();
        return view('front.photo.index', compact('items'));
    }
}
