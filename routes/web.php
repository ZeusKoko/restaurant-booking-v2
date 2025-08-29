<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminReservationController;

Route::resource('reservations', ReservationController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/reservations', [AdminReservationController::class, 'index'])->name('admin.reservations.index');
    Route::post('/admin/reservations/{id}', [AdminReservationController::class, 'update'])->name('admin.reservations.update');
});


Route::middleware(['auth'])->group(function () {

    // Add this line:
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return redirect()->route('reservations.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
