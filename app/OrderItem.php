<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'id',
        'item_id',
        'order_id',
    ];
    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function orders()
    {
        return $this->hasOne('App\Order');
    }

    public $timestamps = false;
}
