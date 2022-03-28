<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;

class CrudController extends Controller
{



    public function __construct()
    {

    }





    public function create()
    {


        return view('task.create');
    }
    public function store(TaskRequest $request){

      Task::create([
            'name' => $request->name,
//           'user_id' => $request -> user_id


        ]);
        return redirect()->back()->with(['success' => __('messages.task added successfully')]);
    }
}
