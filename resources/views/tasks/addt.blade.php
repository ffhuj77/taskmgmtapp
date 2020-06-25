@extends('layout')

@section('content')
  <div class="container-fluid" style="padding-top:30px;">
    <ol class="breadcrumb mb-4">
      <a href="/projects/{{$projID}}"><i class="fas fa-arrow-left"></i> <strong>Back</strong></a>
    </ol>

    <h1 class="mt-4">Add Task</h1>
    <div class="row">
      <div class="col-xl-3 col-md-4">
        <form class="" action="/projects/{{$projID}}/task/add" method="POST">
          @csrf
          <div class="form-group">
            <label for="name"><strong>Task Name</strong></label>
            <input type="text" name="name" class="form-control form-control-lg" >
            @if ($errors->has('name'))
                <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
            <input name="id" type="hidden" value="{{$projID}}">
          </div>
          <div class="form-group">
            <label for="date"><strong>Task Deadline</strong></label>
            <input type="date" name="deadline_date" class="form-control">
            @if ($errors->has('date'))
                <p class="text-danger">{{$errors->first('date')}}</p>
            @endif
            </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
