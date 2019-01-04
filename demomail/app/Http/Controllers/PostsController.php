<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Session;
use http\Env\Response;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.view', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = new Post();
        $posts->name = $request->input('name');
        $posts->birth = $request->input('birth');


    }

    public function view($id)
    {
        $posts = Post::finOrFail($id);
        return view('posts.view', compact('posts'));
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.edit', compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->name = $posts->input('name');
        $posts->birth = $posts->input('birth');
        $posts->save();
    }

    public function destroy($id)
    {
            $posts = Post::finOrFail($id);

            $posts->delete();

            return redirect()->route('posts.index');
    }



}
