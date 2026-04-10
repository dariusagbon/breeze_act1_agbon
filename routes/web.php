<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;
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

// Rooms (static view, no controller needed)
Route::get('/Rooms', function () {
    return view('rooms');
})->middleware(['auth', 'verified'])->name('rooms');

// Booking form (static view)
Route::get('/booking', function () {
    return view('booking');
})->middleware(['auth', 'verified'])->name('booking');

// View Bookings - wired to BookingController
Route::get('/ViewBooking', [BookingController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('ViewBooking');

// Store a new booking (POST from booking form)
Route::post('/ViewBooking/store', [BookingController::class, 'store'])
    ->middleware('auth')->name('booking.store');

// Delete a booking
Route::delete('/ViewBooking/{id}', [BookingController::class, 'destroy'])
    ->middleware('auth')->name('booking.destroy');

// Customers - wired to CustomerController
Route::get('/Customers', [CustomerController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('CustomerView');

// Store a new customer (POST from customer form)
Route::post('/Customers/store', [CustomerController::class, 'store'])
    ->middleware('auth')->name('customer.store');

// Delete a customer
Route::delete('/Customers/{id}', [CustomerController::class, 'destroy'])
    ->middleware('auth')->name('customer.destroy');

// Payments (static view)
Route::get('/Payments', function () {
    return view('Payment');
})->middleware(['auth', 'verified'])->name('Payment');

require __DIR__.'/auth.php';