<?php

namespace App\Http\Controllers;

use App\Repositories\LawsRepository;

class LawController extends Controller
{
    protected $repo;

    public function __construct(LawsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function lawsUZB()
    {
        $items = $this->repo->lawsUZB();
        return view('front.law.lawsUZB', compact('items'));
    }

    public function dr_president()
    {
        $items = $this->repo->dr_presidents();
        return view('front.law.lawsPresident', compact('items'));
    }

    public function rc_minister()
    {
        $items = $this->repo->rc_ministers();
        return view('front.law.lawsMinistry', compact('items'));
    }

}
