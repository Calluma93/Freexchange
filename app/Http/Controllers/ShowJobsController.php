<?php

namespace App\Http\Controllers;

use App\Job;
use App\Preferences;
use App\User;
use Auth;

class ShowJobsController extends Controller {

    public function index() {

        if (Auth::check()) {

            $user_id = Auth::user()->id;
            $user_type = Auth::user()->type;
            $emp_jobs = Job::getJobs($user_id)->get();
            //return dd($user_id);
            $preferences = Preferences::getPreferences($user_id)->get();

            if ($user_type == 'employer') {

                $jobs = $emp_jobs;
                //return dd($jobs);
                return view('/profile/jobs', compact('jobs'));
            } else {

                if ($preferences->isEmpty()) {

                    $jobs = Job::all();
                } else {

                    $jobs = Job::getUsersJobs($preferences)->get();
                }

                return view('/profile/jobs', compact('jobs', 'profile'));
            }
        } else {

            $jobs = Job::all();

            return view('/profile/jobs', compact('jobs'));
        }
    }

    public function show(Job $job) {


        return view('/profile/showjobs', compact('job'));
    }

    public function destroy($id) {

        $job = Job::findOrFail($id);
        $job->delete();
        
        return redirect('/jobs');
    }

}
