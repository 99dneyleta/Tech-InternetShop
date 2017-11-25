<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'brandId',
        'model',
        'sizes',
        'connector',
        'material',
        'colorId',
        'price',
        'quantity',
        'description',
        'photo',
        'typeID',
        'power',
        'capacity',
        'volume',
        'crutchsQuantity'
    ];
}
