<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Users</title>
       <!--[if lt IE 9]>
        <script src = "http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif] -->
      </head>
    <body>
        <!-- if placed with triple braces... escape is automatically attempted  -->
     <!--  {{{ '<script>alert("hacking attempt...")</script>' }}}-->
       
       @unless(!count($users))
           @foreach($users as $user)
            <p> {{{$user->email}}}</p> <!--{{ }} means echo {{{}}} means escaped-->
            <p><?php ////echo isset($user->email)  ? $user->email : 'Default value'; ?></p>
             <!-- is equal below: -->
            <p> {{{ $user->email or 'default value'}}} </p>
            
            
           @endforeach
       @endunless
       
    </body>
</html>