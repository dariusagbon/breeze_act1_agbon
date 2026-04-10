<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Show all bookings
    public function index()
    {
        $bookings = booking::orderBy('created_at', 'desc')->get();
        return view('ViewBooking', compact('bookings'));
    }

    // Save a new booking
    public function store(Request $request)
    {
        $request->validate([
            'RoomType'  => 'required|string',
            'GuessName' => 'required|string|max:255',
            'contactNo' => 'required|numeric|digits_between:7,15',
            'check_in'  => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        booking::create([
            'RoomType'  => $request->RoomType,
            'GuessName' => $request->GuessName,
            'contactNo' => $request->contactNo,
            'check_in'  => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        return redirect('/ViewBooking')->with('success', 'Booking confirmed!');
    }

    // Delete a booking
    public function destroy($id)
    {
        booking::findOrFail($id)->delete();
        return redirect('/ViewBooking')->with('success', 'Booking deleted.');
    }
}