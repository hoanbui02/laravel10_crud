@extends('layouts.app')

@section('body')
    <h1 class="mb-0">DETAILS STUDENT</h1>
    <hr />
    <form>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name Student</label>
                <input type="text" name="name" class="form-control" value="{{ $student->name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $student->address }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{ $student->email }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Room ID</label>
                <input type="text" name="room_id" class="form-control" value="{{ $student->room_id }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Course ID</label>
                <input type="text" name="course_id" class="form-control" value="{{ $student->course_id }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" value="{{ $student->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" value="{{ $student->updated_at }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <a href="{{ route('student.index') }}" type="button" class="btn btn-success btn-sm">BACK</a>
            </div>
        </div>
    </form>
@endsection