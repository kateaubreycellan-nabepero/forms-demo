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

Route::get('/', function () {
    // return view('welcome');

    $data = [
        'title'=>"more title",
        'content'=>'more content',
    ];

    // Configure .env file for the SMTP endpoints
    Mail::send('emails.test', $data, function ($message) {
        $message->from('john@johndoe.com', 'John Doe');
        $message->sender('john@johndoe.com', 'John Doe');
        $message->to('john@johndoe.com', 'John Doe');
        $message->cc('john@johndoe.com', 'John Doe');
        $message->bcc('john@johndoe.com', 'John Doe');
        $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Subject');
        $message->priority(3);
        $message->attach('T:\\mpv-shot0004.png');
    });


});
