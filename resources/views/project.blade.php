<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>{{$projectName}}</h1>
    <p>{{$projectDesc}}</p>
    <ul>
      @foreach ($projecTasks as $task)
      <li>  {{$task->task_name}}  - {{$task->task_target_date}} </li>
      @endforeach
    </ul>
  </body>
</html>
