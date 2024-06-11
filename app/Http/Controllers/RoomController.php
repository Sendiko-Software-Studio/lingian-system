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
        $rooms = Room::all();
        $title = 'List Kamar';
        return view('admin.room.index', compact('rooms'), ['title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Input Kamar";
        $data = ['title' => $title];
        return view('admin.room.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Room::create([
            'number' => $request->room_number
        ]);
        return redirect()->route('admin.rooms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Kamar";
        $data = ['title' => $title];

        $room = Room::findOrFail($id);
        $guests = $room->guests;
        return view('admin.room.edit', compact('guests', 'room'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::update($request->all());

        return view('admin.room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Room::destroy($id);

        return redirect()->route('admin.rooms.index');
    }
}
