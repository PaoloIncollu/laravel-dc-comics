<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    function index()
    {
        return view('welcome');
    }

    function about()
    {
        return view('subpages.about');
    }


}
