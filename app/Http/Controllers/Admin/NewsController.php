<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Repositories\Admin\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $repo;

    public function __construct(NewsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.news.index', compact('models'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('news.index');
    }

    public function show($id)
    {
        $model = $this->repo->findById($id);
        return view('news.show', compact('model'));
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        return view('admin.news.edit', compact('model'));
    }

    public function update(NewsRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('news.index');
    }
}
