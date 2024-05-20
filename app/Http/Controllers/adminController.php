<?php

namespace App\Http\Controllers;

use App\Models\user_db;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\JobAvailable;

class AdminController extends Controller
{
    public function index()
    {
        $jobs = JobAvailable::all(); // Fetch all jobs from the jobs_available table

        return view('admin.dashboard', compact('jobs'));
    }
}