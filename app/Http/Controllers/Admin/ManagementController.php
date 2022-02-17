<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagementRequest;
use App\Repositories\Admin\ManagementRepository;

class ManagementController extends Controller
{
    protected $repo;

    public function __construct(ManagementRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.management.index', compact('models'));
    }

    public function create()
    {
        return view('admin.management.create');
    }

    public function store(ManagementRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('management.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.management.edit', compact('model'));
    }

    public function update(ManagementRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('management.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('management.index');
    }
}
