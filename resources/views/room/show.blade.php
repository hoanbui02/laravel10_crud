@extends('layouts.app')

@section('body')
    <h1 class="mb-0">DETAILS ROOM</h1>
    <hr />
    <form>
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Room Name</label>
                <input type="text" name="room_name" class="form-control" value="{{ $room->room_name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Room Time</label>
                <input type="text" name="room_time" class="form-control" value="{{ $room->room_time }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" value="{{ $room->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" value="{{ $room->updated_at }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <a href="{{ route('room.index') }}" class="btn btn-success btn-sm" type="button">OK</a>
            </div>
        </div>
    </form>
@endsection