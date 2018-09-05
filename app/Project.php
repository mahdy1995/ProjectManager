<?php

namespace ProjectsManager;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',

    ];


    public function users(){
		return $this->belongsToMany('ProjectsManager\User');
    }

    

    public function company(){
		return $this->belongsTo('ProjectsManager\Company');
    }

    public function comments()
    {
        return $this->morphMany('ProjectsManager\Comment', 'commentable');
    }

}
