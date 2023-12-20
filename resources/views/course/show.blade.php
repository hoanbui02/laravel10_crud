@extends('layouts.app')

@section('body')
    <h1 class="mb-0">DETAIL COURSE</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="course_name" class="form-control" placeholder="Course Name" value="{{ $course->course_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Course Time</label>
            <input type="text" name="course_time" class="form-control" placeholder="Course Time" value="{{ $course->course_time }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $course->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $course->updated_at }}" readonly>
        </div>
    </div>
@endsection