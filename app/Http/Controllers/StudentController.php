<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::orderBy('created_at', 'ASC')->get();

        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::select('id', 'room_name as label')->get();
        $courses = Course::select('id', 'course_name as label')->get();
        return view('student.create', [
            'rooms' => $rooms,
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->all());

        return redirect()->route('student.index')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        $rooms = Room::select('id', 'room_name as label')->get();
        $courses = Course::select('id', 'course_name as label')->get();

        return view('student.show', compact('student'), [
            'rooms' => $rooms,
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        $rooms = Room::select('id', 'room_name as label')->get();
        $courses = Course::select('id', 'course_name as label')->get();

        return view('student.edit', compact('student'), [
            'rooms' => $rooms,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $rooms = Room::select('id', 'room_name as label')->get();
        $courses = Course::select('id', 'course_name as label')->get();

        $student->update($request->all());

        return redirect()->route('student.index', ['rooms'=>$rooms, 'courses'=>$courses])->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully!');
    }
}
