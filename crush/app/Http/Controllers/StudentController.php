<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    public function store(StudentRequest $request)
    {
        $students = new Student();
        $students->name = $request->name;
        $students->age = $request->input('age');
        $students->email = $request->input('email');
        $students->img = $request->input('img');
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
        $students = Student::findOrfail($id);
        $students->name = $request->input('name');
        $students->age = $request->input('age');
        $students->email = $request->input('email');
        $students->img = $request->input('img');
        $students->save();

        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $students = Student::findOrfail($id);
        $students->delete();
        return redirect()->route('student.index');

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $students = Student::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('age', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->get();

        return view('student.list', compact('students'));
    }

    public function upload()
    {
        if (Input::hasFile('file')) {
            echo 'Uploaded';

            $file = Input::file('file');
            $file->move('uploads', $file->getClientOrginalName());
            echo '';
        }
    }


}
