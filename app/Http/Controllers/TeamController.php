<?php

namespace App\Http\Controllers;

use App\Repositories\TeamRepository;

class TeamController extends Controller
{
    protected $repo;

    public function __construct(TeamRepository $repo)
    {
        $this->repo = $repo;
    }

    public function leader()
    {
        $items = $this->repo->leaders();
        return view('front.team.leader', compact('items'));
    }

    public function employee()
    {
        $items = $this->repo->employees();
        return view('front.team.employee', compact('items'));
    }
}
