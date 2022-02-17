<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionalDepartsRequest;
use App\Repositories\Admin\RegionalDepartsRepository;
use Illuminate\Http\Request;

class RegionalDepartsController extends Controller
{
    protected $repo;

    public function __construct(RegionalDepartsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $models = $this->repo->all();
        return view('admin.regional-departs.index', compact('models'));
    }

    public function create()
    {
        $cities = $this->repo->cities();
        return view('admin.regional-departs.create', compact('cities'));
    }

    public function store(RegionalDepartsRequest $request)
    {
         $this->repo->store($request->all());
         return redirect()->route('regional-departs.index');
    }

    public function edit($id)
    {
        $model = $this->repo->findById($id);
        $cities = $this->repo->cities();
        $data = [
          'model' => $model,
          'cities' => $cities
        ];
        return view('admin.regional-departs.edit', compact('data'));
    }

    public function update(RegionalDepartsRequest $request, $id)
    {
        $this->repo->update($request->all(), $id);
        return redirect()->route('regional-departs.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect()->route('regional-departs.index');
    }

}
