<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function users() {

        return $this->belongsToMany('App\User', 'task_user', 'user_id', 'task_id');
    }

}
