<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('welcome');
    }


}
