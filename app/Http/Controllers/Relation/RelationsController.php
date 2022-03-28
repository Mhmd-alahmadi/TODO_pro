<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;

use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function getTask($user_id)
    {
        $users = User::find($user_id);
        $tasks = $users->tasks;
        return view('task.task', compact('tasks'));
    }


    public function delete(Request $request)
    {
        return $request->id;
//        $user = User:: find($request->id);
        $user = User:: find($request->id);
        $user = $user->task;
        if (!$user)
        {
            return redirect()->back()->with('erroe');
        } else
            {
            $user->delete();
//
////            return response()->json([
////                'status' => true,
////                'msg' => "deleted succffuly",
////            ]);
        }
        }


    }
