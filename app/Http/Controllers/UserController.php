<?php

namespace App\Http\Controllers;

use App\Models\user_db;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function destroy(user_db $user)
        {
            $user->delete();
            return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
            // Redirect or return a response as needed
        }
    
}
