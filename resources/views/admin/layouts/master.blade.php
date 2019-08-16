<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asstes/css/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('asstes/fontawesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('asstes/css/style.css')}}">
    <title>App Name - @yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <!-- SideBar -->
      <div class="row">
        <div class="col-md-3">
          @include('admin/layouts.sidebar')
        </div>
        <div class="col-md-9">

          @if(Session()->has('message'))
          <div class="alert alert-primary" role="alert" id="infoMessage">
            {{Session()->get('message')}}
          </div>
          @endif

          @yield('content')
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('asstes/js/jquery-3.3.1.slim.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('asstes/js/popper.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('asstes/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('asstes/fontawesome/js/all.js')}}" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('asstes/js/custom.js')}}"></script>
  </body>
</html>