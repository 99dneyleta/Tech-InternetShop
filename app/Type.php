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

    public static function getAtomsTypeList()
    {

        $colors = \App\Type::all('product_type','type')->where('type','atom')->all();
        $list = array();
        foreach ($colors as $color) {
            $list[] = $color->product_type;
        }
        return array_combine(range(1,count($list)),$list);

    }
    public $timestamps = false;
}