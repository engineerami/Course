<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @include('layouts.headtags')
    @yield('head-tag')

    <title>خانه</title>

  
   
</head>
<body>

@include('layouts.header')
@yield('content')
@include('layouts.script')
@yield('script')
@include('layouts.footer')
@yield('footer')
     

</body>
</html>
