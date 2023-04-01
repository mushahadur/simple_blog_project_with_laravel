<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function imageIndex(){
        return view('FronEnd.HomeImage');
    }
    function blogIndex(){
        return view('FronEnd.Blog');
    }
}
