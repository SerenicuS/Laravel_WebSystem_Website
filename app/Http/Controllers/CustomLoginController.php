<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user_db;
class CustomLoginController extends Controller
{
    public function index()
    
    {
        error_log('Login form data received: ');
        return view('login');
    }

    public function login(Request $request)
    {
        error_log('Login form data received: ' . print_r($request->all(), true));
    
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log in the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            error_log('User logged in successfully.');
            
            $user = Auth::user();
            if ($user->role === 'admin') {
                // Redirect to another website if the user is an admin
                return redirect()->route('admin.dashboard');
            } else {
                // Redirect to the home route if the user is not an admin
                return redirect()->intended('home');
            }
        }
    
        // If authentication fails, redirect back with error message
        error_log('Login failed: These credentials do not match our records.');
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
   
}
