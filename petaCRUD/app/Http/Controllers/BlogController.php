<?php

namespace App\Http\Controllers;

use DeepCopy\f008\B;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('blog.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        Blog::create($request->all());
        return redirect()->route('blog.index')
            ->with('success', 'Create new successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::findOrfail($id);
        return view('blog.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::findOrfail($id);
        return view('blog.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        $blogs = new Blog();
        $blogs->title = $request->get('title');
        $blogs->content = $request->get('content');
        $blogs->image = $request->get('image');
        $blogs->save();

        return redirect()->route('blog.index')
            ->with('success', 'Update new successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrfail($id);
        $blogs->delete();

        return redirect()->route('blog.index')
            ->with('success', 'Delete Successfully ');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $blogs = Blog::where('title', 'like', '%' .$keyword .'%')->get();

        return view('blog.index', compact('blogs'))
            ->with('success', 'Search Successfully');
    }
}
