<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomRegistrationController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ShowCaseController;
use App\Http\Controllers\UserSectionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/usersection', [UserSectionController::class, 'index'])->name('usersection');
//Auth\CustomRegistrationController@store'

Route::get('registration', [CustomRegistrationController::class, 'index'])->name('registration');
Route::post('registration', [CustomRegistrationController::class, 'store'])->name('registration');



Route::post('/custom-login', [CustomLoginController::class, 'login']);
Route::get('/custom-login', [CustomLoginController::class, 'index'])->name('custom.login');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/job', [JobController::class, 'index'])->name('job');

Route::get('/showcaseitem', [ShowCaseController::class, 'index'])->name('showcaseitem');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

