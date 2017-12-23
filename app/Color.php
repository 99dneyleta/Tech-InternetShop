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

    public static function getColorsList()
    {
        $colors = \App\Color::all('name')->all();
        $list = array();
        foreach ($colors as $color) {
            $list[] = $color->name;
        }
        return array_combine(range(1,count($list)),$list);
    }
    public $timestamps = false;
}
