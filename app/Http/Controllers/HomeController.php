<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guests = Guest::all();
        $totalGuest = sizeof($guests);
        $rooms = Room::all();
        $totalRoom = sizeof($rooms);
        $title = 'Dashboard';
        $data = ['totalGuest' => $totalGuest, 'totalRoom' => $totalRoom, 'title' => $title];
        return view('admin.home', $data);
    }
}
