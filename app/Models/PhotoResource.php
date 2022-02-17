<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class PhotoResource extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'photo_id',
        'child_image',
    ];

}
