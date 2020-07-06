@extends('layout')

@section('content')
<div class="py-4">
      <a href="/" class="text-base p-3 border-solid rounded bg-gray-500 hover:bg-gray-400"><i class="fas fa-arrow-left"></i><strong> Back</strong></a>
</div>
<div class="py-4 mb-3">
    <span class="text-4xl font-bold pr-2"><i class="fas fa-plus"></i> Add Project</span>
</div>
<form  action='/projects/add' method="POST">
  @csrf
  <div>
    <label for="projectName"><strong>Project Name</strong></label>
    @if ($errors->has('name'))
      <span class="text-red-700">{{$errors->first('name')}}</span>
    @endif
    <input type="text" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
  </div>
  <div>
    <label for=""><strong>Project Description</strong></label>
    @if ($errors->has('description'))
      <span class="text-red-700">{{$errors->first('description')}}</span>
    @endif
    <textarea name="description" rows="5" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
  </div>
  <div>
    <input type="submit" name="submit" class="text-base font-bold p-3 border-solid rounded bg-blue-400 hover:bg-blue-300">
  </div>
</form>
@endsection
