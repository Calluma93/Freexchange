<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preferences;
use Auth;

class PreferencesController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function show() {
        return view('/profile/setpreferences');
    }

//        protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|max:255',
//            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|min:6|confirmed',
//            'type' => 'required|max:255',
//        ]);
//    }

    protected function store() {

        Preferences::updateOrCreate(['user_id' => Auth::user()->id],
                [

            'user_id' => Auth::user()->id,
            'tech' => request('tech'),
            'location' => request('location'),
            'wage' => request('wage'),
            'startdate' => request('startdate'),
            'enddate' => request('enddate')
        ]);

        return redirect('home');
    }

}
