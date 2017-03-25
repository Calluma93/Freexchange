<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;

class JobsController extends Controller {

    public function __construct() {
        $this->middleware('checkemp');
        
    }

    protected function show() {
        return view('/profile/employer/createjob');
    }

        protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|max:255',           
            'tech' => 'required|min:255',
            'location' => 'required|max:255',
            'wage' => 'required|max:10',
            'description' => 'required|max:255',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);
    }

    protected function store() {

        Job::create([

            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'tech' => request('tech'),
            'location' => request('location'),
            'wage' => request('wage'),
            'description' => request('description'),
            'startdate' => request('startdate'),
            'enddate' => request('enddate')
        ]);

        return redirect('home');
    }

}
