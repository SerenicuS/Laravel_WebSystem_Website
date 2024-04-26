<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomRegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

 
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create and store the user in the database
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // Redirect to a success page or return a response
        return redirect()->route('register');
    }

}
