<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/petcare.css')?>" type="text/css"> 

        <link rel="stylesheet" href="/css/bootstrap.css">
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
        <button class="button buttonNav" onclick="window.location='<?php echo e(url('home')); ?>'">Home</button>
        <button class="button buttonNav" onclick="window.location='<?php echo e(url('about')); ?>'">About</button>
        <button class="button buttonNav" onclick="window.location='<?php echo e(url('rules')); ?>'">Rules</button>
        <button class="button buttonNav" onclick="window.location='<?php echo e(url('advertisements')); ?>'">advertisement</button>
        <button class="button buttonNav">Register</button>
        <button class="button buttonNav" onclick="window.location='<?php echo e(url('editcredentials')); ?>'">Profile</button>

        </nav>


        <main id=content>
            <div id=sidecontent>
                <h1 id=sidebar>Information Cluster</h1>
                <h2 id=sidebar>Search this Site</h2>
            </div>

            <div id=maincontent>
                <?php echo $__env->yieldContent('content'); ?>

            </div>

        </main>

        <footer>
    <p class="lead">&copy; PetCare Project</p>
	</footer>
    </div>
    
    </body>
</html>
<?php /**PATH C:\newXampp\htdocs\PetcareProject\resources\views/layout/app.blade.php ENDPATH**/ ?>