<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\ValidationBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(5);
        return view('blogs.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationBlog $request)
    {
        $blogs = new Blog();
        $blogs->title = $request->input('title');
        $blogs->content = $request->input('content');
        $blogs->due_date = $request->input('due_date');
        $blogs->save();

        Session::flash('Succes', 'Done');
        return redirect()->route('blogs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blogs.view', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Respon return redirect()->route('blogs.index');se
     */
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blogs.edit', compact('blogs'));
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
        $blogs = Blog::findOrFail($id);
        $blogs->title = $request->input('title');
        $blogs->content = $request->input('content');
        $blogs->due_date = $request->input('due_date');
        $blogs->save();

        Session::flash('Succes', 'Done');
        return redirect()->route('blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return redirect()->route('blogs.index');
    }

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');

        if (!$keyword) {
            return redirect()->route('blogs.index');
        }

        $blogs = Blog::where('title','LIKE','%'. $keyword .'%')->get();

        return view('blogs.view', compact('blogs'));

        }

        public function checkValidation(Request $request)
        {
            $success = 'Dữ liệu được xác thực thành công';

            return view('welcome', compact('success'));
        }

}
