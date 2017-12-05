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

    public function brand()
    {
        return $this->hasOne('App\Brand');
    }

    public function color()
    {
        return $this->hasOne('App\Color');
    }

    public function type()
    {
        return $this->hasOne('App\Type');
    }

    public function scopeAtoms($query)
    {
        return $query->where('typeID',3);
    }
    public $timestamps = false;


























}
