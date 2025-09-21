<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room_categories = RoomCategory::all();
         $rooms = Room::all();
          return view('room.index', compact('rooms','room_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $reservations = Reservation::where('guest_id', 1)->get();
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Room::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
     
        return view('room.edit', compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $room->name                = $request->name;
        $room->status              = $request->status;
        $room->room_category_id    = $request->room_category_id;
        $room->description         = $request->description;
        $room->update();

        return redirect('room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return back();
    }
}
