<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status'
    ];





    protected $table = 'statuses';
    public $timestamps = false;
}