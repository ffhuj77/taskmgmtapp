@extends('layout')

@section('content')
<div class="py-4">
      <a href="/projects/{{$projID}}" class="text-base p-3 border-solid rounded bg-gray-500 hover:bg-gray-400"><i class="fas fa-arrow-left"></i><strong> Back</strong></a>
</div>
<div class="py-4 mb-3">
    <span class="text-4xl font-bold pr-2"><i class="fas fa-plus"></i> Add Task</span>
</div>
<form action="/projects/{{$projID}}/task/add" method="POST">
  @csrf
  <div>
    <label for="name"><strong>Task Name</strong></label>
    @if ($errors->has('name'))
      <span class="text-red-700">{{$errors->first('name')}}</span>
    @endif
    <input type="text" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
    <input name="id" type="hidden" value="{{$projID}}">
  </div>
  <div>
    <label for="deadline_date"><strong>Task Deadline</strong></label>
    @if ($errors->has('description'))
      <span class="text-red-700">{{$errors->first('description')}}</span>
    @endif
    <input type="date" name="deadline_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
  <div>
    <input type="submit" name="submit" class="text-base font-bold p-3 border-solid rounded bg-blue-400 hover:bg-blue-300">
  </div>
</form>
@endsection
