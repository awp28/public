<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LawsRequest;
use App\Repositories\Admin\LawsRepository;
use Illuminate\Http\Request;

class LawsController extends Controller
{
    protected $repo;

    public function __construct(LawsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.laws.index', compact('models'));
    }

    public function create()
    {
        return view('admin.laws.create');
    }

    public function store(LawsRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('laws.index');
    }

    public function show($id)
    {
        $model = $this->repo->findById($id);
        return view('laws.show', compact('model'));
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.laws.edit', compact('model'));
    }

    public function update(LawsRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('laws.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('laws.index');
    }
}
