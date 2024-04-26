<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomRegistrationController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ShowCaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/custom-register', [CustomRegistrationController::class, 'index'])->name('custom.register');

Route::get('/custom-login', [CustomLoginController::class, 'index'])->name('custom.login');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/job', [JobController::class, 'index'])->name('job');

Route::get('/showcaseitem', [ShowCaseController::class, 'index'])->name('showcaseitem');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
