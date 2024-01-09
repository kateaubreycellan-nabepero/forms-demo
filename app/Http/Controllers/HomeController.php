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
        // session(['more sessions'=>'your session']);

        // Updating a sessions
        // session(['more sessions'=>'replaced session']);

        // Deleting sessions
        // $request->session()->forget('more sessions');

        // Flashing data
        // Does not persist, only stays on the current request and is deleted on next request
        $request->session()->flash('temporary message', 'some message');

        // Keep data a bit longer
        $request->session()->reflash();

        // Keeps the session
        $request->session()->keep('temporary message');

        // Delete all sessions
        // $request->session()->flush();

        // Reading sessions
        return $request->session()->all();

        // return view('home');
    }
}
