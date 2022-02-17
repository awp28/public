<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Law extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'title',
        'url',
        'type',
    ];

    protected $casts = [
            'title' => 'array',
        ];

}
