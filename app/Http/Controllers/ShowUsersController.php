<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Auth;
use App\Preferences;

class ShowUsersController extends Controller {

    public function __construct() {
       
    }

    public function index() {

        $profiles = Profile::all();
        //return dd($profiles);

        return view('/profile/users', compact('profiles'));
    }

    public function showUser(Profile $profile) {

        return view('/profile/showusers', compact('profile'));
    }

    public function showEmployers() {

        $user_id = Auth::user()->id;
        $preferences = Preferences::getPreferences($user_id)->get();
        
        
        if ($preferences->isEmpty()) {
            
            $profiles = Profile::getEmployers()->get();
        } 
        
        else {      
            
            $profiles = Profile::getUsersFreelancers($preferences)->get();               
        }
        //return dd($profiles);
        return view('/profile/users', compact('profiles'));
    }

    public function showEmployer(User $user) {
       
        return view('/profile/showusers', compact('user'));
    }

    public function showFreelancers() {

        $user_id = Auth::user()->id;
        $preferences = Preferences::getPreferences($user_id)->get();
        
        
        if ($preferences->isEmpty()) {
            
            $profiles = Profile::getFreelancers()->get();
        } 
        
        else {      
            
            $profiles = Profile::getUsersFreelancers($preferences)->get();               
        }
        //return dd($profiles);
        return view('/profile/users', compact('profiles'));
    }

    public function showFreelancer(User $user) {
        
        //return dd($profile);

        return view('/profile/showusers', compact('user'));
    }

}
