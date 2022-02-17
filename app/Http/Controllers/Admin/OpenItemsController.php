<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OpenItemRequest;
use App\Repositories\Admin\OpenItemsRepository;

class OpenItemsController extends Controller
{
    protected $repo;

    public function __construct(OpenItemsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.open-items.index', compact('models'));
    }

    public function create()
    {
        return view('admin.open-items.create');
    }

    public function store(OpenItemRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('openItems.index');
    }

    public function show($id)
    {
        $model = $this->repo->findById($id);
        return view('openItems.show', compact('model'));
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.open-items.edit', compact('model'));
    }

    public function update(OpenItemRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('openItems.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('openItems.index');
    }
}
