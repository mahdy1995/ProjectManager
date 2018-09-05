<?php

namespace ProjectsManager;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',

    ];

    public function commentable()
    {
        return $this->morphTo();
    }
    

        /**
     * Return the user associated with this comment.
     *
     * @return array
     */
     public function user()
     {
         return $this->hasOne('\ProjectsManager\User', 'id', 'user_id');
     }
}
