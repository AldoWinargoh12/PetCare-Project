
<!DOCTYPE html>
<html>
    <head>
  
      <title>@yield('title')</title>
    </head>
    <body>
    
    @yield('content')
     
       <ul>
           <li> <a href ='/about'>about</a></li>
           <li> <a href ='/'>home</a></li>
           <li> <a href ='/post'>post</a></li>
       </ul>
       @yield('forms')
        @yield('number1')
    </body>



</html>