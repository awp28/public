<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class OpenItem extends Model
{
    use HasFactory;
    use Mediable;

    protected $table = 'open_items';

    protected $fillable = [
        'name',
        'file',
        'type',
    ];

    protected $casts = [
            'name' => 'array',
        ];
}
