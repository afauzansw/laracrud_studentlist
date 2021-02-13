<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::latest()->paginate(5);
        return view('students.index',compact('student'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store(Request $request)
    {
        $stu = Student::create([
            'nama'      => $request->nama,
            'details'   => $request->details
        ]);

        return redirect()->route('students.index')->with('success','Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }


    public function edit(Student $student)
    {
        return view('students.edit',compact('student', $student));
    }

    public function update(Request $request, Student $student)
    {

        $student->nama = $request->nama;
        $student->details = $request->details;
        $student->save();


        return redirect()->route('students.index')->with('success','Student updated successfully.');
    }


    public function destroy(Request $request, Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','Student deleted successfully.');
    }
}
