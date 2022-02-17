<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Photo extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'title',
        'logo',
        'video',
    ];

    protected $casts = [
            'title' => 'array',
        ];

    public function photos()
    {
        return $this->hasMany(PhotoResource::class);
    }
}
