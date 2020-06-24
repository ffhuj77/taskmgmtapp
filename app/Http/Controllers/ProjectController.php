<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
// use App\Task;

Class ProjectController {


  public function showProject($id) {

    // generates 404 if the id is not found
    $projectObj = Project::getProject($id);

     return view('project', [
       "projectName" => $projectObj['project_name'],
       "projectDesc" => $projectObj['project_description'],
       "projecTasks" => Project::find($id)->tasks
     ]);
  }
}

 ?>
