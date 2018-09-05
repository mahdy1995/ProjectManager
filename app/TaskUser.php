<?php

namespace ProjectsManager;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //
    protected $fillable = [
        'task_id',
        'user_id',
    ];


    
}
