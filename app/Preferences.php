<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model {

    protected $fillable = [
        'user_id', 'tech', 'location', 'wage', 'startdate', 'enddate'
    ];
    
    public function user() {
        
        return $this->belongsTo(User::class);
        
    }
    
    public function scopeGetPreferences($query, $user_id){
        
        return $query->join('users', 'preferences.user_id', '=', 'users.id')->where('users.id', $user_id);
    }

}
