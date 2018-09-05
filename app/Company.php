<?php

namespace ProjectsManager;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $fillable = [
        'id',
        'name',
        'description',
        'user_id'

    ];

    public function user(){
		return $this->belongsTo('ProjectsManager\User');
    }

    public function projects(){
        return $this->hasMany('ProjectsManager\Project');
    }

    public function comments()
    {
        return $this->morphMany('ProjectsManager\Comment', 'commentable');
    }
}
