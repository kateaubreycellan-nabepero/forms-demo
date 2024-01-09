<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Setting a session
        // $request->session()->put(['some text'=>'more text here']);

        // Another way of setting a session, but globally
        session(['another session'=>'some more text here']);

        // Reading sessions
        return $request->session()->all();

        // return view('home');
    }
}
