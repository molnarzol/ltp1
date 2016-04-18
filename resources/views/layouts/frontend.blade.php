<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes.fronted.header')

        <div class="main">
            @yield('content')
        </div>
        
        @include('includes.frontend.footer')
    </body>
</html>