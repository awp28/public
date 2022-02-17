<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{
    private $repo;

    public function __construct(CityRepository $repo)
    {
        $this->repo = $repo;
    }

    public function all()
    {
        $cities = $this->repo->cities();

        return view('front.regional-depart.index', compact('cities'));
    }

    public function getById($id)
    {
        $city = $this->repo->findById($id);

        return view('front.regional-depart.regional-departs', compact('city'));
    }
}
