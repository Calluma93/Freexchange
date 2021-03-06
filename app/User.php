<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'avatar', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function job() {
        
        return $this->hasMany(Job::class);        
    }
    
    public function profile() {

        return $this->hasOne(Profile::class);
    }

    public function preferences() {

        return $this->hasOne(Preferences::class);
    }
    
    public function scopeOfType($query, $type) {
        
        return $query->where('type', $type);
    }
    


}
