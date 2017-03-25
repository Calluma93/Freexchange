<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DefaultController extends Controller {

    public function handle() {
        if (Auth::guest()) {
            return view('/welcome/welcome');
        } else {
            return redirect('home');
        }
    }

}
