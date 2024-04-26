<?php

namespace App\Http\Controllers;

use App\Models\user_db;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomRegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

 
    public function store(Request $request)
    {
        error_log('Form data received: ' . print_r($request->all(), true));

        try {
               // Validate the request data
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create and store the user in the database
        user_db::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // Redirect to a success page or return a response
        return redirect()->route('home');
        } catch (\Exception $e) {
            // Log any exceptions
            error_log('Exception occurred: ' . $e->getMessage());
        }
     
    }

}
