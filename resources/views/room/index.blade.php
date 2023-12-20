@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">LIST ROOM</h1>    
        <a href="{{ route('room.create') }}" class="btn btn-primary btn-sm">Add Room</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>STT</th>
                <th>Room Name</th>
                <th>Room Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($room->count() > 0)
                @foreach ($room as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->room_name }}</td>
                        <td class="align-middle">{{ $rs->room_time }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('room.show', $rs->id) }}" class="btn btn-secondary btn-sm" type="button">Detail</a>
                                <a href="{{ route('room.edit', $rs->id) }}" class="btn btn-warning btn-sm" type="button">Edit</a>
                                <form action="{{ route('room.destroy', $rs->id) }}" class="btn btn-warning btn-sm p-0" type="button" method="POST" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm m-0">Delete</button> 
                                </form>     
                            </div>  
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Room not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection