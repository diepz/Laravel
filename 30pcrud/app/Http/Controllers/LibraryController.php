<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Library::latest()->paginate(5);

        return view('book.index',compact('books'))
            ->with('i', (request()->input('page', 1) -1) *5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
            'content' => 'required',
        ]);

       Library::create($request->all());
        return redirect()->route('book.index')
            ->with('success', 'Create new Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Library::findOrfail($id);
        return view('book.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Library::findOrfail($id);
        return view('book.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $books = new Library();
        $books->title = $request->input('title');
        $books->content = $request->input('content');
        $books->save();

        return redirect()->route('book.index')
            ->with('success', 'Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Library::findOrfail($id);
        $books->delete();

        return redirect()->route('book.index')
            ->with('success', 'Delete Successfully');
    }
}
