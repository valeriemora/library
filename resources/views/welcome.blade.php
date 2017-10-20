@extends('layouts.app')

<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Maniak Library</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/newstyle.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
</head>


<header>
  <div class="container-fluid position-ref">
    {{-- <div class="container"> --}}
      <div class="row">
        <div class="col">
          {{-- <div class="top-left links"> --}}
          <a href="{{ url('/') }}">LOGO</a>
          {{-- </div> --}}
        </div>
        <div class="col">
          <div class="top-right links">
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/books') }}">Books</a>
          <a href="{{ url('/books/create') }}">Register a new Book</a>
          </div>
        </div>
      </div>
    {{-- </div> --}}
  </div>
</div>
</header>


  <div class="flex-center container">SLIDER
  {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> --}}
</div>


<body>

  <div class="flex-center full-height">
    <div class="content">
      {{-- <div class="row">
      <div class="col-6"></div>
      <div class="col-6"></div>
    </div> --}}
    <div class="row">
      <div class="col-sm-6 col-md-5 col-lg-6">Description From Library</div>
      <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">Image or graphic</div>
    </div>
    {{-- <div class="title m-b-md">
    Maniak Library
  </div> --}}
</div>
</div>

<div class="flex-center position-ref">
  <div class="row">
    <div class="col-6 col-md-4">LOGO</div>
    <div class="col-6 col-md-4">FREE</div>
    <div class="col-6 col-md-4">SOCIAL MEDIA</div>
  </div>
  {{-- <div class="links">
  <a href="https://laravel.com/docs">Documentation</a>
  <a href="https://laracasts.com">Laracasts</a>
  <a href="https://laravel-news.com">News</a>
  <a href="https://forge.laravel.com">Forge</a>
  <a href="https://github.com/laravel/laravel">GitHub</a>
</div> --}}
</div>

t src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>


<script>
// $('.carousel').carousel();

</script>
</html>
