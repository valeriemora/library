<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style media="screen">
  .row{
    margin-top: 200px;
  }
  .navbar.navbar-default.navbar-fixed-top{
    height:200px;
    background-image:url('/img/header.png');
    //background-repeat: no-repeat;
  }
  .navbar {background-color: #8e181b;}
  .navbar-default .navbar-nav > li > a, .navbar-default .navbar-brand {color: #f1f1f1;}
  .navbar-default .navbar-nav > li > a:hover,
  .navbar-default .navbar-nav > li > a:focus {color: #f1f1f1; background-color: #b27677;}

  @media only screen and (max-width: 766px) {
    .collapsing, .in {background-color: #f7f7f7;}
    .collapsing ul li a, .in ul li a {color: #555!important;}
    .collapsing ul li a:hover, .in ul li a:hover {color: #f1f1f1!important;}

  }
  @media only screen and (max-width: 375px) { /* iphone 6 vertical*/
    .collapsing, .in {background-color: #f7f7f7;}
    .collapsing ul li a, .in ul li a {color: #555!important;}
    .collapsing ul li a:hover, .in ul li a:hover {color: #f1f1f1!important;}
    .navbar.navbar-default.navbar-fixed-top{
      height:200px;
      background-image:url('/img/header_mobil.png');
      background-repeat:no-repeat;
    }
  }
  </style>
  <title>Maniak Library</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container" style="">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Branding Image -->
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="/" class="dropdown-toggle"  role="button" >HOME</a>
            </li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/books/index" class="dropdown-toggle"  role="button" >BOOKS</a>
            </li>
            <li>
              <a href="/books/create" class="dropdown-toggle"  role="button" >REGISTER A NEW BOOK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
