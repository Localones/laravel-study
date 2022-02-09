<?php

namespace App\Http\Controllers;

use App\Models\PostsContext;
use Illuminate\Http\Request;

class PostsContextController extends Controller
{

    public function index()
    {
        $posts = PostsContext::all();
        return view('context.index', compact('posts'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $post = PostsContext::query()->find($id);

        return view('context.show', compact('post'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
