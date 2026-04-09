<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Rooms', function () {
    return view('rooms');
})->middleware(['auth', 'verified'])->name('rooms');

Route::get('/booking', function () {
    return view('booking');
})->middleware(['auth', 'verified'])->name('booking');

Route::get('/ViewBooking', function () {
    return view('BookingListView');
})->middleware(['auth', 'verified'])->name('BookingListView');

Route::get('/Customers', function () {
    return view('CustomerView');
})->middleware(['auth', 'verified'])->name('CustomerView');

Route::get('/Payments', function () {
    return view('Payment');
})->middleware(['auth', 'verified'])->name('Payment');


require __DIR__.'/auth.php';
