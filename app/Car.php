<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description',
        'type',
        'make',
        'model',
        'first_registration',
        'mileage',
        'fuel',
        'engine_size',
        'power',
        'gearbox',
        'number_seats',
        'doors',
        'color',
        'extra'
    ];

    public function photos(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Photo::class,'photoable');
    }

}
