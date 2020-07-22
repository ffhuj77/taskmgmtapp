<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

Class ProjectController {

  /*
  *   show all articles
  */
  public function listProjects()
  {
    // passes data to the view
   return view('projects.index',["Projects"
                        => Project::getAllProjects()]);
  }


  /*
  *   shows a single Project via id including the tasks linked with
  *   the project
  */
  public function showProject(Project $id)
  {
    // passess data to the to the view
     return view('projects.show',[
       "projectName" => $id['project_name'],
       "projectId" => $id['id'],
       "projectDesc" => $id['project_description'],

       // retrieves all data from tasks table using the id of Project
       "unCompletedTasks" => $id::find($id['id'])->tasks()->where('status','=','0')->get(),

       //
       "CompletedTasks" => $id::find($id['id'])->tasks()->where('status','=','1')->get()
     ]);
  }


  /*
  *   shows the view to create or add a new project
  */
  public function addProject()
  {
    return view('projects.add');
  }


  /*
  *   shows a single Project via id including the tasks linked with the project
  */
  public function storeProject()
  {
    // validates input from the form
    $request = request()->validate([
      'name' => 'required',
      'description' => 'required'
    ]);

    // a method thats asigns attributes and saves to db
    Project::create([
      "project_name" => request('name'),
      "project_description" => request('description')
    ]);

    // redirects to the home or root page
    return redirect('/');
  }


}


 ?>
