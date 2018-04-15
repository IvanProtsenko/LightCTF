<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\User;
use Auth;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_solution($task_id, Request $request)
    {
        $user = User::findOrFail(Auth::User()->id);
        $task = Tasks::findOrFail($task_id);

        if ($request->has('flag') and $task->flag == $request->flag)
        {
            $user->tasks()->attach($task_id);
        }
        return redirect('/home');

    }
}
