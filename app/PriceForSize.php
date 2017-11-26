<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceForSize extends Model
{
    protected $fillable = [
        'size',
        'price'
    ];

    public function Eliquid()
    {
        return $this->belongsTo('App\Eliquid');
    }
}
