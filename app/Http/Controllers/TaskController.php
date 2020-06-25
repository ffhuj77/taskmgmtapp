<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    /*
    *   shows the view to create or add a new project
    */
    public function addTask($id)
    {
      return view('tasks.addt',["projID" => $id]);
    }


    /*
    *   shows a single Project via id including the tasks linked with the project
    */
    public function storeTask($id)
    {
      // validates input from the form
      $request = request()->validate([
        'name' => 'required',
        'deadline_date' => 'required',
        'id'=>'required'
      ]);

      // a method thats asigns attributes and saves to db
      Task::create([
        "task_name" => request('name'),
        "task_target_date" => request('deadline_date'),
        'project_id' => request('id')
      ]);

      //redirects to the home or root page
      return redirect('/projects/'.$id);
    }


    /**
    * updates a tasks status to true
    */
    public function updateTask($id)
    {

      $task = Task::find($id);
      $task->status = 1;
      $task->save();
      return redirect('/projects/'.request('projectid'));
    }
}
