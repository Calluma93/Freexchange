<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Job extends Model {

    protected $fillable = [
        'user_id',
        'title',
        'tech',
        'location',
        'wage',
        'description',
        'startdate',
        'enddate'
    ];
    protected $dates = [
        'startdate',
        'enddate'
    ];

    public function setStartdateAttribute($date) {
        $this->attributes['startdate'] = Carbon::parse($date);
    }

    public function setEnddateAttribute($date) {
        $this->attributes['enddate'] = Carbon::parse($date);
    }

    public function getLocationAttribute($value) {
        return ucfirst($value);
    }

    public function getTechAttribute($value) {
        return ucfirst($value);
    }
    
    public function user() {
        
        return $this->belongsTo(User::class);
        
    }
    
    public function scopeGetUsersJobs($query, $preferences){
        
        return $query->where([
                       ['jobs.tech', $preferences->pluck('tech')],
                       ['jobs.location', $preferences->pluck('location')],
                       ['jobs.wage', $preferences->pluck('wage')],
                       ['jobs.startdate', '>=', $preferences->pluck('startdate')],
                       ['jobs.enddate', '<=', $preferences->pluck('enddate')],
        ]);
    }
    
    public function scopeGetJobs($query, $user_id){
        
        return $query->where('jobs.user_id', $user_id);
    }
    
    

}
