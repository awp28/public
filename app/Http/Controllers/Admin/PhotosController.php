<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoRequest;
use App\Repositories\Admin\PhotosRepository;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    protected $repo;

    public function __construct(PhotosRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.photos.index', compact('models'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(PhotoRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('photos.index');
    }

    public function show($id)
    {
        $model = $this->repo->findById($id);
        return view('photos.show', compact('model'));
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.photos.edit', compact('model'));
    }

    public function update(PhotoRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('photos.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('photos.index');
    }

    public function photoUpload(Request $request, $id)
    {
        $input = $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $this->repo->photoUpload($input, $id);
        return back();
    }

    public function deletePhoto(Request $request, $id)
    {
        $input = $this->validate($request, [
            'file_index' => 'required|numeric',
        ]);
        $this->repo->deletePhoto($id, $input['file_index']);
        return back();
    }
}
