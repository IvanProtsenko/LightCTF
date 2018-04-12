<?php

namespace App\Http\Controllers;

use App\User;
use App\Task_user;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('/scoreboard', ['users' => $users]);
    }
    public function add($id)
    {
        $phone = new Task_user();
        $phone->user_id = Auth::User()->id;
        $phone->contact_id = $id;
        $phone->save();
        return view('home');
    }
}
