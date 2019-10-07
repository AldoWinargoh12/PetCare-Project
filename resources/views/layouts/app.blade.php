<!doctype html>
<html lang="{{ app()->getLocale() }}" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/petcare.css')?>" type="text/css"> 

        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/js/jquery-2.2.4.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <!-- Styles -->
    </head>
    <body>
    
        <!--Main Navigation-->
    <header>
      <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand">Petcare Project</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#" onclick="window.location='{{ url('home') }}'">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#" onclick="window.location='{{ url('home') }}'">Advertisement</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="#" onclick="window.location='{{ url('rules') }}'">Rules</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#" onclick="window.location='{{ url('about') }}'">About</a>
              </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link disabled" href="#">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main id=content>
        <div id=sidecontent>
            <h1 id=sidebar>Information Cluster</h1>
            <h2 id=sidebar>Search this Site</h2>
        </div>

        <div id=maincontent>
        <div id=content>
            @yield('content')
        </div>
        </div>

    </main>

        <footer>
    <p class="lead">&copy; PetCare Project</p>
	</footer>
    </div>
    
    <!-- Plugins -->

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --><script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
    </body>
</html>
