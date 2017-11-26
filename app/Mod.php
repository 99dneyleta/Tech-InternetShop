<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{
    protected $fillable = [
        'brandId',
        'model',
        'sizes',
        'connector',
        'material',
        'colorID',
        'price',
        'quantity',
        'description',
        'photo',
        'typeID',
        'power',
        'capacity'
    ];

    protected $table = 'products';
}
