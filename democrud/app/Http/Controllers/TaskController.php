<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::latest()->paginate(5);
        return view('tasks.index', compact('tasks'))
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
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
           'name' => 'required',
            'birth' => 'required',
            'image' => 'required',
            'email' => 'required',

        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')
            ->with('success', 'Create new successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasks = Task::findOrfail($id);
        return view('tasks.show', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::findOrfail($id);
        return view('tasks.edit', compact('tasks'))
            ->with('successs', 'Edit successfully');
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
        $request->validate([
            'name' => 'required',
            'birth' => 'required',
            'image' => 'required',
            'email' => 'required',

        ]);
        $tasks = new Task();
        $tasks->name = $request->get('name');
        $tasks->birth = $request->get('birth');
        $tasks->image = $request->get('image');
        $tasks->email = $request->get('email');
        $tasks->save();

        return redirect()->route('tasks.index')
            ->with('success', 'Update new successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::findOrfail($id);
        $tasks->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'Delete successfully');
    }


}
