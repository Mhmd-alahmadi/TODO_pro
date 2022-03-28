<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function getTask($user_id)
    {
       $users = User::find($user_id);
       $tasks = $users->tasks;
        return view('task.task',compact('tasks'));
    }
}
