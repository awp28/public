<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\FileService;

class FileController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new FileService();
    }

    public function storeManual($detail, $directory = 'news')
    {
        return $this->service->storeManual($detail, $directory);
    }

    public function updateManual($detail, $directory = 'news')
    {
        return $this->service->updateManual($detail, $directory);
    }
}
