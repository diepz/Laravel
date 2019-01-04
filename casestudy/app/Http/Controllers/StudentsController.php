<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.list', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $students = new Student();
        $students->name = $request->input('name');
        $students->age = $request->input('age');
        $students->birth = $request->input('birth');
        $students->country = $request->input('country');
        $students->save();

        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $students = Student::findOrfail($id);
        return view('student.list', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $students = Student::findOrfail($id);
        $students->name = $request->input('name');
        $students->age = $request->input('age');
        $students->birth = $request->input('birth');
        $students->country = $request->input('country');
        $students->save();

        return redirect()->route('student.index');

    }
}
