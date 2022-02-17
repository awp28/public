<?php

namespace App\Http\Controllers;

use App\Repositories\VideoRepository;

class VideoController extends Controller
{
    private $repo;

    public function __construct(VideoRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $items = $this->repo->all();
        return view('front.video.index', compact('items'));
    }
}
