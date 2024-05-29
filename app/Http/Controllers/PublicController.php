<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('public.welcome', ['nomor_kamar' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('public..form', ['nomor_kamar' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $room = Room::where('number', $id)->first();

        // dd($request->nama);

        if ($request->hasFile("gambar")) {
            $image = $request->file("gambar");
            $fileName = $image->hashName();
            $image->storeAs("public/images/", $fileName);

            Guest::create([
                "room_id" => $room->id,
                "image" => $fileName,
                "nama_tamu" => $request->nama,
            ]);

            if ($request->nama2 != null) {
                if ($request->hasFile("gambar2")) {
                    $image2 = $request->file("gambar2");
                    $fileName2 = $image->hashName();
                    $image2->storeAs("public/images/", $fileName2);

                    Guest::create([
                        "room_id" => $room->id,
                        "image" => $fileName2,
                        "nama_tamu" => $request->nama2
                    ]);
                }
            }
        }

        return view('public.success');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
