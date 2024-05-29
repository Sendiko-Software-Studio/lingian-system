<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/room', [PublicController::class, 'index'])->name('room.index');
Route::get('/room/{id}', [PublicController::class, 'show'])->name('room.show');
Route::get('/room/{id}/edit', [PublicController::class, 'edit'])->name('room.edit'); 
Route::post('/room/{id}/update', [PublicController::class, 'update'])->name('room.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
