@extends('layouts.app')

@section('body')
    <h1 class="mb-0">UPDATE ROOM</h1>
    <hr />
    <form action="{{ route('room.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Room Name</label>
                <input type="text" name="room_name" class="form-control" value="{{ $room->room_name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Room Time</label>
                <input type="text" name="room_time" class="form-control" value="{{ $room->room_time }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success btn-sm" type="submit">Update</button>
            </div>
        </div>
    </form>
@endsection