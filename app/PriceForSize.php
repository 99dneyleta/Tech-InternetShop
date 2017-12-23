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

    public static function getSizeList()
    {
        $colors = \App\PriceForSize::all('size')->all();
        $list = array();
        foreach ($colors as $color) {
            $list[] = $color->size;
        }
        return array_combine(range(1,count($list)),$list);
    }

    protected $table = 'priceforsize';
    public $timestamps = false;
}
