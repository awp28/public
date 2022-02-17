<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Team extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'fullname',
        'department',
        'position',
        'phone',
        'image',
        'biography',
        'reception_days',
        'ordered',
    ];

    protected $casts = [
            'fullname' => 'array',
            'department' => 'array',
            'position' => 'array',
            'biography' => 'array',
            'reception_days' => 'array',
        ];
}
