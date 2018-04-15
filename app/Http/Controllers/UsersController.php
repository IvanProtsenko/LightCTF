<?php

namespace App\Http\Controllers;

use App\User;
use App\Tasks;
use Auth;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::findOrFail(Auth::User()->id);
        $task = Tasks::all();
        return view('home', ['user' => $users, 'tasks' => $task]);
    }
    public function score()
    {
        $users = user::all();
        $tasks = Tasks::all();

        foreach ($users as $key => $user) {
            $users[$key]->score = $user->tasks()->sum('price');
        }
        return view('scoreboard', ['users' => $users, 'tasks' => $tasks]);
    }
}
