<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    public function index()
    {
        $posts = Posts::query()->paginate(3);
        return view('posts.index', compact('posts'));
//        phpinfo();
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Posts::query()->create($request->all());

        return redirect()->route('posts.index')->with('success', 'Пост добавлен');
    }

   /* public function show($id)
    {
        return "Post $id";
    }*/


    public function edit($id)
    {
        $post = Posts::query()->find($id);
        return view('posts.edit', compact('post'));
    }

    public function search(Request $request){
        $request->validate([
            's' => 'required',
        ]);

        $s = $request->s;

        $posts = Posts::query()->when('name', 'LIKE', "%{$s}%")->with('posts')->paginate(4);
        return view('posts.search', compact('posts', 's'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Posts::query()->find($id)->update($request->all());

        return redirect()->route('posts.index')->with('info', 'Пост обновлен');
    }


    public function destroy($id)
    {
        Posts::destroy($id);
        return redirect()->route('posts.index')->with('warning', 'Пост удален');
    }
}



