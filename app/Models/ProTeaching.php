<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class ProTeaching extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'logo',
        'name_center',
        'full_name',
        'phone',
        'destination',
    ];

    protected $casts = [
            'name_center' => 'array',
            'full_name' => 'array',
            'destination' => 'array',
        ];
}
