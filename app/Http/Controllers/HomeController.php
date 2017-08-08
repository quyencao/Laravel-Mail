<?php

namespace App\Http\Controllers;

use App\Mail\NewUserWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function email() {
        // Send Email
        Mail::to(Auth::user()->email)->send(new NewUserWelcome());

        return redirect('/home');
    }
}
