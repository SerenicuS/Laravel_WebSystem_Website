<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomRegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }
}
