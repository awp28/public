<?php

namespace App\Repositories;

use App\Models\RegionalDepart;
use App\Models\News;
use App\Models\ProTeaching;

class ResourceRepository
{
    private $regional_repo;
    private $news_repo;
    private $proTech_repo;

    public function __construct()
    {
        $this->regional_repo = new RegionalDepart();
        $this->news_repo = new News();
        $this->proTech_repo = new ProTeaching();
    }

    public function index()
    {
        $data['regionals'] = $this->regional_repo->orderBy('id', 'asc')->with('city')->get();
        $data['news'] = $this->news_repo->orderBy('id', 'desc')->get();
        $data['proTech'] = $this->proTech_repo->orderBy('id', 'desc')->get();
        return $data;
    }

}


