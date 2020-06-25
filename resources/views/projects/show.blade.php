@extends('layout')

@section('content')
<div class="container-fluid" style="padding-top:30px;">
  <ol class="breadcrumb mb-4">
      <a href="/"><i class="fas fa-arrow-left"></i> <strong>Back</strong></a>
  </ol>
  <h1 class="mt-4">{{$projectName}} <a type="button" class="btn btn-outline-primary" href="/projects/{{$projectId}}/task/add"> + Add Task</a></h1>

  <h6 class="mt-4"><p>{{$projectDesc}}</p></h6>
  <div class="row">
    <div class="container-fluid" style="padding-top:30px;">
      <p><h3><i class="fas fa-tasks"></i> Tasks:</h4></p>
    </div>
    @foreach ($projecTasks as $task)
      <div class="col-xl-3 col-md-4">
      <div class="card mb-2 card-columns">
          <div class="card-header bg-light ">
            @if ($task->status == 0)
            <form class="" action="/tasks/{{$task->id}}" method="post">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="taskid" value="{{$task->id}}">
                  <input type="hidden" name="projectid" value="{{$projectId}}">
                  <button type="submit" class="btn btn-primary float-right"> + Mark As Complete</button>
            </form>
              @else
               <button type="disabled" class="btn btn-success float-right">Completed</button>
             @endif
          </div>
          <div class="card-body">
            <h5 class="card-title" style="padding-bottom:30px;">{{$task->task_name}}</h5>
            <p class="card-text"> <strong>Target Date:</strong> {{$task->task_target_date}}</p>
          </div>
      </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
