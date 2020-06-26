<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  // to avoid Illuminate\Database\Eloquent\MassAssignmentException
  protected $fillable = ['task_name','task_target_date','project_id','status'];

  // to override laravel created_at & updated_at
  public $timestamps = false;

  
}
