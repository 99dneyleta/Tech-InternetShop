<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Brand()
    {
        return $this->belongsTo('App\Product');
    }
}
