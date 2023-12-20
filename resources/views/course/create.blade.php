@extends('layouts.app')

@section('body')
    <h1 class="mb-0">ADD COURSE</h1>
    <hr />
    <form action="{{ route('course.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="course_name" class="form-control" placeholder="Course Name">
            </div>
            <div class="col">
                <input type="text" name="course_time" class="form-control" placeholder="Course Time">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection