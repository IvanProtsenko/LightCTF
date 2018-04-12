<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_user extends Model
{
    public function users() {
        return $this->belongsToMany('App/User');
    }
    public function tasks() {
        return $this->belongsToMany('App/Tasks');
    }
}
