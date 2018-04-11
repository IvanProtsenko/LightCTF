<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        $tasks = tasks::all();
        $f = isset($request->r);
        $id = $request->id;
        if($f == true) {
            $r = $request->r;
            if($r == ($tasks[$id-1]->flag)) {
                return view('home', ['tasks' => $tasks, 'r' => true, 'id' => $id]);
            }
            elseif($r != ($tasks[$id-1]->flag)) {
                return view('home', ['tasks' => $tasks, 'r' => false, 'id' => $id]);
            }
        }
        else  {
            return view('home', ['tasks' => $tasks, 'r' => 0, 'id' => $id]);
        }
    }
}
