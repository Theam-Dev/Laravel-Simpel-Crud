<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Simple Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="{{route('post.index')}}">Laravel Simple Crud</a>

  <ul class="navbar-nav">
   
    <li class="nav-item">
      <a class="nav-link" href="{{route('post.create')}}">Create Post</a>
    </li>
  </ul>
</nav>

<div class="container m-4">
  
    @yield('content')
</div>

</body>
</html>
