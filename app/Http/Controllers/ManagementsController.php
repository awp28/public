<?php

namespace App\Http\Controllers;

use App\Repositories\ManagementRepository;

class ManagementsController extends Controller
{
    protected $repo;

    public function __construct(ManagementRepository $repo)
    {
        $this->repo = $repo;
    }

    public function about()
    {
        $items = $this->repo->about();
        return view('front.about.index', compact('items'));
    }

    public function activity()
    {
        $items = $this->repo->activity();
        return view('front.activity.index', compact('items'));
    }
}
