<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;

Route::redirect('/', '/login');

Route::get('/room', [PublicController::class, 'index'])->name('room.index');
Route::get('/room/{id}', [PublicController::class, 'show'])->name('room.show');
Route::get('/room/{id}/edit', [PublicController::class, 'edit'])->name('room.edit'); 
Route::post('/room/{id}/update', [PublicController::class, 'update'])->name('room.update');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/admin', [HomeController::class, 'index'])->name('home');

    Route::get('/admin/rooms', [RoomController::class,'index']) ->name('admin.rooms.index');
    Route::get('/admin/room/create', [RoomController::class, 'create'])->name('admin.room.create');
    Route::get('/admin/room/store', [RoomController::class, 'store'])->name('admin.room.store');

    Route::get('admin/guests', [GuestController::class, 'index'])->name('admin.guests.index');
    Route::get('admin/guest/create', [GuestController::class, 'create'])->name('admin.guest.create');
    Route::get('admin/guest/store', [GuestController::class, 'store'])->name('admin.guest.store');
});