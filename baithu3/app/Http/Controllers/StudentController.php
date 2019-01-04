<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        $students->addres = $request->input('addres');
        $students->city = $request->input('city');
        $students->phone = $request->input('phone');
        $students->save();

        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $students = Student::findOrfail($id);
        return view('student.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $students = Student::findorfail($id);
        $students->name = $request->input('name');
        $students->age = $request->input('age');
        $students->addres = $request->input('addres');
        $students->city = $request->input('city');
        $students->phone = $request->input('phone');
        $students->save();

        return redirect()->route('student.index');



    }

    public function destroy($id)
    {
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->route('student.index');

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword ');

        if (!$keyword) {
            return redirect()->route('student.index');
        }


        $students = Student::where('name', '%' .$keyword. '%');
        return view('student.list', compact('students'));
    }


}
