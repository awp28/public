<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivitiesRequest;
use App\Repositories\Admin\ActivitiesRepository;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    protected $repo;

    public function __construct(ActivitiesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.activities.index', compact('models'));
    }

    public function create()
    {
        return view('admin.activities.create');
    }

    public function store(ActivitiesRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('activities.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.activities.edit', compact('model'));
    }

    public function update(ActivitiesRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('activities.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('activities.index');
    }
}
