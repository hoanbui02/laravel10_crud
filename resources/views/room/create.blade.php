@extends('layouts.app')

@section('body')
    <h1 class="mb-0">ADD ROOM</h1>
    <hr />
    <form action="{{ route('room.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="room_name" class="form-control" placeholder="Room Name" required>
            </div>
            <div class="col">
                <input type="text" name="room_time" class="form-control" placeholder="Room Time" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary btn-sm">Add</button>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <a href="{{ route('room.index') }}" type="button" class="btn btn-success btn-sm">BACK</a>
            </div>
        </div>
    </form>
@endsection