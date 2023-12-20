@extends('layouts.app')

@section('body')
       <div class="d-flex align-items-center justify-content-between">
              <h1 class="mb-0">LIST STUDENT</h1>
              <a href="{{ route('student.create') }}" type="button" class="btn btn-primary btn-sm">ADD</a>
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
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Mail</th>
                            <th>Room ID</th>
                            <th>Course ID</th>
                            <th>Action</th>
                     </tr>
              </thead>
              <tbody>
                     @if ($student->count() > 0)
                            @foreach ($student as $rs)
                            <tr>
                                   <td class="align-middle">{{ $loop->iteration }}</td>
                                   <td class="align-middle">{{ $rs->name }}</td>
                                   <td class="align-middle">{{ $rs->phone }}</td>
                                   <td class="align-middle">{{ $rs->address }}</td>
                                   <td class="align-middle">{{ $rs->mail }}</td>
                                   <td class="align-middle">{{ $rs->room_id }}</td>
                                   <td class="align-middle">{{ $rs->course_id }}</td>
                                   <td class="align-middle">
                                         <div class="btn-group" role="group" aria-label="Basic example">
                                                 <a href="{{ route('student.show', $rs->id) }}" type="button" class="btn btn-primary btn-sm">Detail</a>
                                                 <a href="{{ route('student.edit', $rs->id) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
                                                 <form action="{{ route('student.destroy', $rs->id) }}" method="POST" class="btn btn-danger btn-sm p-0" type="button" onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                 </form>
                                          </div> 
                                   </td>
                            </tr>
                            @endforeach
                     @else
                            <tr>
                                   <td class="text-center" colspan="10">Student not found</td>
                            </tr>
                     @endif
              </tbody>
       </table>
@endsection