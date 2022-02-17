<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ProTeachingRepository;
use Illuminate\Http\Request;

class MonoController extends Controller
{
//    protected $repo;
//
//    public function __construct( $repo)
//    {
//        $this->repo = $repo;
//    }

    public function index()
    {
//        $items = $this->repo->all();
        return view('front.mono.index');
    }
}
