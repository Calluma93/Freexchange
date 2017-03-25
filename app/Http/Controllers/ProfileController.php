<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Image;
use File;

class ProfileController extends Controller {
    
        public function __construct() {
        $this->middleware('auth');
    }


    protected function show() {
        return view('/profile/freelancer/setprofile', array('user' => Auth::user()));
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

    protected function store(Request $request) {
        
        $user = Auth::user();

        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            if (Auth::user()->avatar != "default.jpg") {
             $path = '/uploads/avatars/';
             $lastpath= Auth::user()->avatar;
             File::Delete(public_path( $path . $lastpath) );
 
         }
            
            Image::make($avatar)->fit(300, 300)->save(public_path('uploads/avatars/' . $filename));
            $user->avatar = $filename;
            $user->save();
        }
        
        Profile::updateOrCreate(['user_id' => $user->id],
                [
            
                    'user_id' => Auth::user()->id,    
                    'type' => Auth::user()->type,
                    'phonenumber' => request('phonenumber'),
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
