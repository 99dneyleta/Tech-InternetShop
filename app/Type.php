<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type',
        'productType'
    ];

    public function Brand()
    {
        return $this->belongsTo('App\Product');
    }

}