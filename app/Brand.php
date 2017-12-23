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

    public static function getBrandList()
    {
        $users = \App\Brand::all('name')->all();
        $list = array();
        foreach ($users as $user) {
            $list[] = $user->name;
        }
        return array_combine(range(1,count($list)),$list);
    }
    public $timestamps = false;
}
