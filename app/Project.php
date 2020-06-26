<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // to avoid Illuminate\Database\Eloquent\MassAssignmentException
    protected $fillable = ['project_name','project_description'];

    // to override laravel created_at & updated_at
    public $timestamps = false;

    /*
    *   to get all projects sorted by newest created project
    */
    public static function getAllProjects()
    {
        return Self::latest()->get();
    }

    /*
    * returns a collection of
    */
    public function tasks()
    {
      return $this->hasMany(Task::class);
    }
}
