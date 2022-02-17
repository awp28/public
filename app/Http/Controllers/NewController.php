<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\NewRepository;
use Illuminate\Http\Request;

class NewController extends Controller
{
    private $repo;

    public function __construct(NewRepository $repo)
    {
        $this->repo = $repo;
    }

    public function all()
    {
        $items = $this->repo->all();
        return view('front.news.index', compact('items'));
    }

    public function forIndex()
    {
        $items = $this->repo->forIndex();
        return view('front.news.index', compact('items'));
    }

    public function show($id)
    {
        $item = $this->repo->findById($id);
        return view('front.news.show', compact('item'));
    }
}
