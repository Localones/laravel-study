<?php

namespace App\Http\Controllers;

use App\Models\Mypage;
use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index()
    {
        $posts = Mypage::all();
        return view('layout.index', compact('posts'));
    }
}
