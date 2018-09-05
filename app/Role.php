<?php

namespace ProjectsManager;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name',
    ];


    public function users(){
		return $this->hasMany('ProjectsManager\User');
    }
}
