<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use App\Models\JobAvailable;

class JobController extends Controller
{
    public function index()
    {
        error_log('check index');
        $jobs = JobAvailable::all(); // Fetch all jobs from the database
        return view('job', ['jobs' => $jobs]); // Pass the jobs data to the view
    }

    public function destroy($jobs_available_ID)
    {
        error_log('check destroy');
        $job = JobAvailable::where('jobs_available_ID', $jobs_available_ID)->firstOrFail(); // Find the job by its ID
        $job->where('jobs_available_ID', $jobs_available_ID)->delete(); // Delete the job
    
        return redirect()->back()->with('success', 'Job deleted successfully');
    }
}
