<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Management extends Model
{
    use HasFactory;
    use Mediable;

    protected $table = 'management';

    protected $fillable = [
        'name',
        'type',
    ];

    protected $casts = [
            'name' => 'array',
        ];
}
