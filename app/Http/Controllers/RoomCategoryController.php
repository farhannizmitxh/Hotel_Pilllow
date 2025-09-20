<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RoomCategorys = RoomCategory::all();
        return view("room_category.index",  compact("RoomCategorys"));

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
        // dd($request->all());
         RoomCategory::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomCategory $RoomCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomCategory $RoomCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomCategory $RoomCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomCategory $RoomCategory)
    {
        //
    }
}