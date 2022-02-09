<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('page.contact');
    }

    function slug($slug){
        return view('page.show', ['slug' => $slug]);
    }
}
