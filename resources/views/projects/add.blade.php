@extends('layout')

@section('content')
  <div class="container-fluid" style="padding-top:30px;">
    <ol class="breadcrumb mb-4">
      <a href="/"><i class="fas fa-arrow-left"></i> <strong>Back</strong></a>
    </ol>

    <h1 class="mt-4">Add new Project</h1>
    <div class="row">
      <div class="col-xl-3 col-md-4">
        <form class="" action='/projects/add' method="POST">
          @csrf
          <div class="form-group">
            <label for="projectName"><strong>Project Name</strong></label>
            <input type="text" name="name" class="form-control form-control-lg" >
            @if ($errors->has('name'))
                <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
          </div>
          <div class="form-group">
            <label for=""><strong>Project Description</strong></label>
            <textarea class="form-control" name="description" rows="5" ></textarea>
            @if ($errors->has('description'))
                <p class="text-danger">{{$errors->first('description')}}</p>
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
