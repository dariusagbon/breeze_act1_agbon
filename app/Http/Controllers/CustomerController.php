<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Show all customers + the add form
    public function index()
    {
        $customers = customers::all();
        return view('CustomerView', compact('customers'));
    }

    // Save a new customer
    public function store(Request $request)
    {
        $request->validate([
            'CustomerName'  => 'required|string|max:255',
            'CustomerEmail' => 'required|email|unique:customers,CustomerEmail',
        ]);

        customers::create([
            'CustomerName'  => $request->CustomerName,
            'CustomerEmail' => $request->CustomerEmail,
        ]);

        return redirect('/Customers')->with('success', 'Customer added successfully!');
    }

    // Delete a customer
    public function destroy($id)
    {
        customers::findOrFail($id)->delete();
        return redirect('/Customers')->with('success', 'Customer deleted.');
    }
}