<?php

namespace App\Repositories;

use App\Models\Photo;
use MediaUploader;

class PhotoRepository
{

    public function __construct()
    {
        $this->entity = new Photo();
    }

    public function all()
    {
        $items = $this->entity::with('photos')->whereNull('video')->orderBy('id', 'desc')->paginate(20);
        return $items;
    }

}
