<?php

namespace App\Http\Controllers;

use App\Models\user_db;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = user_db::all();

        return view('admin.dashboard', compact('users'));
    }

   
}
