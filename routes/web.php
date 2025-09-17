<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FacilityController;

Route::get('/', function () {
    return view('layout');
    
});
Route::get('/guest', function () {
    return view('guest');
    
});

// Satu Kesatuan dari semua method untuk kebutuhan CRUD
Route::resource('/reservation', ReservationController::class);

Route::get('/facility', function () {
    return view('facility');
    
});

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