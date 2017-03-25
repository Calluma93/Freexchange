<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Auth::user()->type == "employer") {
            return view('/profile/employer/emphome');
        } elseif (Auth::user()->type == "freelancer") {
            return view('/profile/freelancer/flhome');
        }
    }

}
