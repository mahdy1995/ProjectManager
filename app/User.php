<?php

namespace ProjectsManager;

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
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

  
    
    public function role(){
		return $this->belongsTo('ProjectsManager\Role');
    }

    public function companies(){
		return $this->hasMany('ProjectsManager\Company');
    }
    

    public function tasks()
    {
        return $this->belongsToMany('ProjectsManager\Task');
    }


    //many to many relationship
    public function projects()
    {
        return $this->belongsToMany('ProjectsManager\Project');
    }

    public function comments()
    {
        return $this->morphMany('ProjectsManager\Comment', 'commentable');
    }

}
