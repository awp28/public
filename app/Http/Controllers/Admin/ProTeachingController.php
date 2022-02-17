<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProTeachingRequest;
use App\Repositories\Admin\ProTeachingRepository;

class ProTeachingController extends Controller
{
    protected $repo;

    public function __construct(ProTeachingRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.pro-teaching.index', compact('models'));
    }

    public function create()
    {
        return view('admin.pro-teaching.create');
    }

    public function store(ProTeachingRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('professional-teaching.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.pro-teaching.edit', compact('model'));
    }

    public function update(ProTeachingRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('professional-teaching.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('professional-teaching.index');
    }
}
