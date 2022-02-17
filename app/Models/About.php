<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class About extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
            'name' => 'array',
        ];
}
