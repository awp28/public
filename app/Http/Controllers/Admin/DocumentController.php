<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Repositories\Admin\DocumentsRepository;

class DocumentController extends Controller
{
    protected $repo;

    public function __construct(DocumentsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.documents.index', compact('models'));
    }

    public function create()
    {
        return view('admin.documents.create');
    }

    public function store(DocumentRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('documents.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.documents.edit', compact('model'));
    }

    public function update(DocumentRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('documents.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('documents.index');
    }
}
