<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();

        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required',
            'class' => 'required',
            'address' => 'required|string',
            'fathername' => 'required|string',
            'mothername' => 'required|string',
            'mobno' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->route('student.index')->with('success', 'Student Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing twhe specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required',
            'class' => 'required',
            'address' => 'required|string',
            'fathername' => 'required|string',
            'mothername' => 'required|string',
            'mobno' => 'required',
        ]);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'Student Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student Deleted Successfully.');
    }
}
