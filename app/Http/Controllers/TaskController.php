<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        return view('tasks.create');
    }

   
    public function index(){
        $user = auth()->user(); // Retrieve the authenticated user
        $tasks = Task::latest()->get();
        
        return view('tasks.index', compact('user', 'tasks'));
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'content'=>'required',
               
        ]);

        $formFields['user_id'] = auth()-> id();

        Task::create($formFields);
        return redirect('/task')->with('message','Task created seccessfuly');

    }
    public function destroy(Task $task){
        $task->delete();
        return redirect('/task/myTaskslist')->with('message','TASK deleted seccessfuly');
        }


    public function myTaskslist(){
        return view('tasks.myTaskslist',['tasks' => auth()->user()->tasks()->get()]);
    }
public function edit(Task $task){
    return view ('tasks.edit',['task'=>$task]);
}

public function update(Request $request, Task $task){
    $formFields = $request->validate([
        'title'=>'required',
        'content'=>'required', 
    ]);
    $task->update($formFields);
    return redirect('/task/myTaskslist')->with('message','task updated seccessfuly');
}
   
}
