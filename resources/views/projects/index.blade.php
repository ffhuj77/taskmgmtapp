@extends('layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Projects <a type="button" class="btn btn-outline-primary" href="/projects/add"> + Add Project</a></h1>

    <div class="row" style="padding-top:30px;">
      @foreach ($Projects as $project)
        <div class="col-xl-4 col-md-8">
            <div class="card mb-5 card-columns">
                <div class="card-body">
                  <div class="card-header bg-transparent border-success">
                    <h2>{{$project->project_name}}</h2>
                    <span style="font-size:12px;">Date Created: {{$project->created_at}}</span>
                    <p>{{$project->project_description}}</p>
                  </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small"  href="/projects/{{$project->id}}"><strong>View Tasks</strong></a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
