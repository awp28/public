<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class RegionalDepart extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'title',
        'fullname',
        'position',
        'address',
        'phone',
        'map_url',
        'city_id',
        'image',
    ];

    protected $casts = [
            'title' => 'array',
            'fullname' => 'array',
            'position' => 'array',
            'address' => 'array',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
