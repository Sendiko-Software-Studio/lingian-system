<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::all();
        $title = 'List Tamu';
        $data = ['title' => $title];
        return view('admin.guest.index', compact('guests'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Input Tamu";
        $data = ['title' => $title];
        $rooms = Room::all();
        return view('admin.guest.create', $data, compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Guest::create([
            'room_id' => $request->room_number,
            'nama_tamu' => $request->guest_name1,
            'status' => $request->status1
        ]);
        Guest::create([
            'room_id' => $request->room_number,
            'nama_tamu' => $request->guest_name2,
            'status' => $request->status2
        ]);
        return redirect()->route('admin.guests.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guest = Guest::findOrFail($id);
        $guest->update(['status' => 'SUDAH']);

        return redirect()->route('admin.guests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guest::destroy($id);

        return redirect()->back();
    }
}
