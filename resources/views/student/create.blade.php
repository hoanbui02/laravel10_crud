@extends('layouts.app')

@section('body')
    <h1 class="mb-0">ADD STUDENT</h1>
    <hr />
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <input type="text" name="name" class="form-control" placeholder="Student Name" required>
            </div>
            <div class="col mb-3">
                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
            <div class="col mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <select name="room_id" data-required="1" class="form-control">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <select name="course_id" data-required="1" class="form-control">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary btn-sm">Add Student</button>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <a href="{{ route('student.index') }} " type="button" class="btn btn-success btn-sm">BACK</a>
            </div>
        </div>
    </form>
@endsection