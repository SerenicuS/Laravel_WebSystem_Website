<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCaseController extends Controller
{
    public function index()
    {
        return view('showcaseitem');
    }
}
