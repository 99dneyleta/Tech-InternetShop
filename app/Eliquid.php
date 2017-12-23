<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eliquid extends Model
{
    protected $fillable = [
        'brandID',
        'vg',
        'pg',
        'nicotine',
        'sizeID',
        'price',
        'quantity',
        'description',
        'isFlavour',
        'oneNicotinePrice',
        'photo'
    ];

    public function priceforsize()
    {
        return $this->hasOne('App\PriceforSize');
    }
    public $timestamps = false;
    protected $table = 'eliquids';
}
