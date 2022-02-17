<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class City extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'region_id',
        'name',
    ];

    protected $casts = [
            'name' => 'array',
        ];

    public function regionalDepart()
    {
        return $this->hasOne(RegionalDepart::class, 'city_id', 'id');
    }
}
