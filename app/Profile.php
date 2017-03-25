<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Profile extends Model {

    protected $fillable = [
        'user_id', 'type', 'phonenumber', 'tech', 'location', 'wage', 'description', 'startdate', 'enddate'
    ];
    
    protected $dates = [
        'startdate',
        'enddate'
    ];
    
    public function user() {
        
        return $this->belongsTo(User::class);
        
    }

    public function setStartdateAttribute($date) {
        $this->attributes['startdate'] = Carbon::parse($date);
    }

    public function setEnddateAttribute($date) {
        $this->attributes['enddate'] = Carbon::parse($date);
    }
    
    public function scopeGetEmployers($query){
        
        return $query->where('type', 'employer');
    }
    
    public function scopeGetFreelancers($query){
        
        return $query->where('type', 'freelancer');
    }
    
    public function scopeGetUsersEmployers($query, $preferences){
        
        return $query->where([
                       ['profiles.type', 'employer'],
                       ['profiles.tech', $preferences->pluck('tech')],
                       ['profiles.location', $preferences->pluck('location')],
                       ['profiles.wage', $preferences->pluck('wage')],
                       ['profiles.startdate', '>=', $preferences->pluck('startdate')],
                       ['profiles.enddate', '<=', $preferences->pluck('enddate')],
        ]);
    }
    
    public function scopeGetUsersFreelancers($query, $preferences){
        
        return $query->where([
                       ['profiles.type', 'freelancer'],
                       ['profiles.tech', $preferences->pluck('tech')],
                       ['profiles.location', $preferences->pluck('location')],
                       ['profiles.wage', $preferences->pluck('wage')],
                       ['profiles.startdate', '>=', $preferences->pluck('startdate')],
                       ['profiles.enddate', '<=', $preferences->pluck('enddate')],
        ]);
    }
    
    public function scopeGetProfile($query, $user_id){
        
        return $query->join('users', 'profiles.user_id', '=', 'users.id')->where('users.id', $user_id);
    }

    
    public function getLocationAttribute($value) {
        return ucfirst($value);
    }

    public function getTechAttribute($value) {
        return ucfirst($value);
    }
}
