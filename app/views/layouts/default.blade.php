<!DOCTYPE html> <!-- from show.blade.php ---> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Users</title>
       <!--[if lt IE 9]>
        <script src = "http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif] -->
      </head>
    <body> {{--from show.blade.php --}}
        @include('partials.menu')  
        @yield('content')
        
        @section('sidebar')
             <h2>Link</h2>
        @show 
        
    </body><!-- from show.blade.php --->
</html><!-- from show.blade.php --->