<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'name',
        'HEX'
    ];

    public function Brand()
    {
        return $this->belongsTo('App\Product');
    }
}
