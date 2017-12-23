<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atomaizer extends Model
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
        'volume',
        'crutchsQuantity'
        ];

    protected $table = 'products';
    public $timestamps = false;
}
