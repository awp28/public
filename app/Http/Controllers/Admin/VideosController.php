<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Repositories\Admin\VideosRepository;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    protected $repo;

    public function __construct(VideosRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.videos.index', compact('models'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(VideoRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('videos.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.videos.edit', compact('model'));
    }

    public function update(VideoRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('videos.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('videos.index');
    }
}
