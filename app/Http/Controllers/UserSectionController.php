<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSectionController extends Controller
{
    public function index()
    {
        return view('usersection');
    }
}
