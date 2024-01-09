<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (/* $email, $password */) {
    // return view('welcome');

    // Check if user is logged in
    if ($auth = Auth::check())
    {
        // Logged in user
        return $auth;
    }
    // Not logged in
    // return 0;

    // Redirect to a specific endpoint if filled up with the correct credentials
    $email = '';
    $password = '';

    if (Auth::attempt(['email' => $email, 'password' => $password]))
    {
        return redirect()->intended('/home');
    }

    return 0;


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
