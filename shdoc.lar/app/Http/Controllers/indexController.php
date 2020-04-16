<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\role;
use App\Http\Requests;

class indexController extends Controller
{
    public function index()
    {
        $tasks=task::all()->toJson();
        $roles=role::all()->toJson();
        return view('index', ['tasks'=>$tasks, 'roles'=>$roles]);
    }

    public function ajaxAllTasks(Request $request)
    {
        $input = $request->all();
        $selector=0;
        if (isset($input['role'])) {
            $role = $input['role'];
            $selector=1;
        }

        if (isset($input['name'])) {
            $name = $input['name'];
            $selector=2;
        }

        if (isset($input['role']) && isset($input['name']))
        {
            $role = $input['role'];
            $name = $input['name'];
            $selector=2;
        }
        //->where('name', 'like', 'T%')
        switch ($selector) {
            case 0: $tasks = task::all()->toJson(); break;
            case 1: $tasks = task::select('tasks.name', 'tasks.closed')->join('roles', 'roles.id', '=', 'tasks.id_role')->where("tasks.id_role", $role)->get()->toJson(); break;
            case 2: $tasks = task::where('name', 'like', $name.'%')->get()->toJson(); break;
            case 3: $tasks = task::select('tasks.name', 'tasks.closed')->join('roles', 'roles.id', '=', 'tasks.id_role')->where('tasks.name', 'like', $name.'%')->where("tasks.id_role", $role)->get()->toJson(); break;
        }
        return $tasks;
    }
}
