<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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

        <header>
            <img id=logo src="/storage/img/petcare_logo.png">
            <div id=headerText>
            <h1 id=header>PetCare Project</h1>
            <h2 id=header>A Second home for all sort of Animals</h1>
            </div>
        </header>
        <nav id=header>
        <button class="button buttonNav" onclick="window.location='{{ url('home') }}'">Home</button>
        <button class="button buttonNav" onclick="window.location='{{ url('about') }}'">About</button>
        <button class="button buttonNav" onclick="window.location='{{ url('rules') }}'">Rules</button>
        <button class="button buttonNav" onclick="window.location='{{ url('advertisements') }}'">advertisement</button></button>
        <button class="button buttonNav" onclick="window.location='{{ url('register') }}'">Register</button>
        <button class="button buttonNav">Profile</button>

        </nav>


        <main id=content>
            <div id=sidecontent>
                <h1 id=sidebar>Information Cluster</h1>
                <h2 id=sidebar>Search this Site</h2>
            </div>

            <div id=maincontent>
                @yield('content')

            </div>

        </main>

        <footer>
    <p class="lead">&copy; PetCare Project</p>
	</footer>
    </div>
    
    </body>
</html>
