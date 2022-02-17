<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Repositories\Admin\TeamsRepository;

class TeamsController extends Controller
{
    protected $repo;

    public function __construct(TeamsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.teams.index', compact('models'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(TeamRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('teams.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.teams.edit', compact('model'));
    }

    public function update(TeamRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('teams.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('teams.index');
    }
}
