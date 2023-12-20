@extends('layouts.app')

@section('body')
    <h1 class="mb-0">EDIT STUDENT</h1>
    <hr />
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $student->name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $student->address }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{ $student->email }}">
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
                <button class="btn btn-primary btn-sm">UPDATE</button>
            </div>
        </div>
    </form>   
@endsection