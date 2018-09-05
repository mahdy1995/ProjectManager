<?php

namespace ProjectsManager;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'days',
        'hours',
        'company_id'
    ];


    public function user(){
		return $this->belongsTo('ProjectsManager\User');
    }

    public function project(){
		return $this->belongsTo('ProjectsManager\Project');
    }

    public function company(){
		return $this->belongsTo('ProjectsManager\Company');
    }

    public function users()
    {
        return $this->belongsToMany('ProjectsManager\User');
    }

    public function comments()
    {
        return $this->morphMany('ProjectsManager\Comment', 'commentable');
    }
}

