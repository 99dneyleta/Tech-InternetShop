<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'totalPrice',
        'status',
        'user_id'
    ];
    public function users()
    {
        return $this->hasOne('App\User');
    }

    public function statuses()
    {
        return $this->hasOne('App\Status');
    }

    public $timestamps = false;
}


