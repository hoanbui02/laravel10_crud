<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = Room::orderBy('created_at', 'ASC')->get();

        return view('room.index', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Room::create($request->all());

        return redirect()->route('room.index')->with('success', 'Room added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::findOrFail($id);

        return view('room.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::findOrFail($id);

        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::findOrFail($id);

        $room->update($request->all());

        return redirect()->route('room.index')->with('success', 'Room updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);

        $room->delete();

        return redirect()->route('room.index')->with('success', 'Room deleted successfully!');
    }
}
