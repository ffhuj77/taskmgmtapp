<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public static function getProject($id)
    {
      return Self::where('id',$id)->firstOrFail();
    }

    public static function getAllProjects()
    {

    }

    public function tasks()
    {
      return $this->hasMany('App\Task');
    }
}
