<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //here you can add pages

    public function index() 
    {
        return view('index');
    }

}
