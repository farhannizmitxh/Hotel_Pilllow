<<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;


Route::get('/', function () {
    return view('layout');
});

Route::resource('/room', RoomController::class);

Route::resource('/guest', GuestController::class);

Route::get('/employee', function () {
    return view('employee');
});

// Resource route for CRUD operations
Route::resource('/reservation', ReservationController::class);

Route::resource('/facility', FacilityController::class);


// Remove the extra closing brace below
// Menampilkan halaman utama
// Route::get('/reservation', [ReservationController::class, 'index']);
// Menampilkan halaman edit dengan data reservation
// Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit']);
// Update data reservation
// Route::put('/reservation/{reservation}', [ReservationController::class, 'update']);
// Delete data
// Route::delete('/reservation/{reservation}', [ReservationController::class, 'destroy']);
// Store data atau insert data
// Route::post('/reservation/{reservation}', [ReservationController::class, 'store']);