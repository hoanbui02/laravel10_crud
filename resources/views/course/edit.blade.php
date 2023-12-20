@extends('layouts.app')

@section('body')
    <h1 class="mb-0">EDIT COURSE</h1>
    <hr />
    <form action="{{ route('course.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Course Name</label>
                <input type="text" name="course_name" class="form-control" placeholder="Course Name" value="{{ $course->course_name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Course Time</label>
                <input type="text" name="course_time" class="form-control" placeholder="Course Time" value="{{ $course->course_time }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning btn-sm">Update</button>
            </div>
        </div>
    </form>
@endsection