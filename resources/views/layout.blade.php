<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Task Management Application</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="container mx-auto">
        <div class="border-b-2 border-gray-600 py-4">
          <a href="/" class="text-5xl font-bold">Task Management App</a>
        </div>
        <div class="mt-5 px-5">
          @yield('content')
        </div>
          <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      </div>
    </body>
</html>
