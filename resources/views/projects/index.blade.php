@extends('layout')

@section('content')
<div class="py-4">
    <span class="text-4xl font-bold pr-2">Projects</span>
    <a href="/projects/add" class="text-base p-3 border-solid rounded bg-green-500 hover:bg-green-400"><i class="fas fa-plus"></i> Add Project</a>
</div>

<div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-4">
  @foreach ($Projects as $project)
  <div class="max-w-md rounded shadow-lg">
    <div class="p-4 h-auto justify-between leading-normal">
      <div class="mb-8">
        <div class="text-gray-900 font-bold text-xl mb-2">{{$project->project_name}} <span class="text-sm text-gray-600">{{$project->created_at}}</span></div>
        <p class="text-gray-700 text-base">{{$project->project_description}}</p>
      </div>
      <div class="text-sm">
        <a href="/projects/{{$project->id}}" class="text-sm"><strong>View Tasks <i class="fas fa-arrow-right"></i></strong></a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
