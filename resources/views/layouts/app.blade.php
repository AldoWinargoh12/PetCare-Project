<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">

        <title>PetCare</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/petcare.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css"> 

        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/js/jquery-2.2.4.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <!-- Styles -->
    </head>
    <body>
    <div id="page-container">
    
        <!--Main Navigation-->
    <header>
   
    <div class="overlay"></div>
      <nav class="navbar navbar-expand-md navbar-light bg-faded">
        <div class="container">
        <img style="width:125px; padding-right:20px;" id=logo src="/storage/img/petcare_logo.png" href="#" onclick="window.location='{{ url('home') }}'">
          <a class="navbar-brand" href="#" onclick="window.location='{{ url('home') }}'">Petcare Project<span class="sr-only">(current)</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Advertisement
                </a>
                <div class="dropdown-menu sm-menu dropdown-content">
                  <a class="dropdown-item" href="#" onclick="window.location='{{ url('advertisements') }}'">View Advertisement</a>
                  <a class="dropdown-item" href="#" onclick="window.location='{{ url('createAdvertisement') }}'">Create Advertisement</a>
                  <a class="dropdown-item" href="#" onclick="window.location='{{ url('live_search') }}'">Search Advertisement</a>
                </div>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Profile
                </a>
                <div class="dropdown-menu sm-menu dropdown-content">
                  <a class="dropdown-item" href="#" onclick="window.location='{{ url('registerpets') }}'">Pet List</a>
                  <a class="dropdown-item" href="#" onclick="window.location='{{ url('posts') }}'">Comments</a>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#" onclick="window.location='{{ url('about') }}'">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="#" onclick="window.location='{{ url('register') }}'">Register</a>
              </li>
              @guest
              <li class="nav-item active">
                <a class="nav-link " href="#" onclick="window.location='{{ url('login') }}'">Login</a>
              </li>
              @endguest
              @auth
              <li class="nav-item active">
                <a class="nav-link " href="#" onclick="window.location='{{ url('logout') }}'">Logout</a>
              </li>
              @endauth
            </ul>   
            <form class="form-inline">
                  <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                  </div>
                </form>
          </div>
        </div>
      </nav>
    </header>
            <div class="bg">
            @yield('content')
            

    </br>
    </br>
    </br>
    </br>
    </br>
      <footer id="footer" class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p id="footertext">&copy; PetCare Project</p>
        <p id="footertext">New to PetCare Project?<a href="../../"> Visit the homepage</a> or read about our <a href="../../rules/">rules</a>.</p>
      </div>
    </footer>
    </div>
</div>
    </body>
</html>
