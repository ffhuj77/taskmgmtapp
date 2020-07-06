@extends('layout')

@section('content')
<div class="py-4">
      <a href="/" class="text-base p-3 border-solid rounded bg-gray-500 hover:bg-gray-400"><i class="fas fa-arrow-left"></i><strong> Back</strong></a>
</div>
<div class="py-4">
    <span class="text-4xl font-bold pr-2">{{$projectName}} </span>
    <a href="/projects/{{$projectId}}/task/add" class="text-base p-3 border-solid rounded bg-green-500 hover:bg-green-400"><i class="fas fa-plus"></i> Add Task</a>
    <p class="pt-2">{{$projectDesc}}</p>
</div>
<div class="text-3xl font-bold pr-2">
  <p>Tasks:</p>
</div>
<div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3">
  @foreach ($projecTasks as $task)
  <div class="max-w-md rounded shadow-lg">
    <div class="p-4 h-auto justify-between leading-normal relative">
      <div class="mb-8 absolute  inset-y-0 right-0">
        @if ($task->status == 0)
          <form action="/tasks/{{$task->id}}" method="post">
        @csrf
        @method('PUT')
          <input type="hidden" name="taskid" value="{{$task->id}}">
          <input type="hidden" name="projectid" value="{{$projectId}}">
          <button type="submit" class="text-base p-3 border-solid rounded bg-blue-400 hover:bg-blue-300">Mark As Complete</button>
        </form>
        @else
          <button type="disabled" class="text-base p-3 border-solid rounded bg-green-400">Completed</button>
        @endif
      </div>
      <div class="mb-8">
        <div class="text-gray-900 font-bold text-xl mb-2">{{$task->task_name}}</div>
        <p class="text-gray-700 text-base"><strong>Target Date:</strong>{{$task->task_target_date}}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
