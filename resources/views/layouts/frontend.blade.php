<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('src/frontend/css/style.css') }}">
        <link href="{{ URL::to('src/frontend/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        @yield('styles')
    </head>
    <body>
        @include('includes.frontend.header')

        <div class="container">
            @yield('content')
        </div>
        
        @include('includes.frontend.footer')

        <script type="text/javascript">
            var baseUrl = "{{ URL::to('/') }}";
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::to('src/frontend/bootstrap/assets/js/vendor/jquery.min.js') }}"><\/script>')</script>
        <script src="{{ URL::to('src/frontend/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ URL::to('src/frontend/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{ URL::to('src/frontend/bootstrap/assets/js/ie10-viewport-bug-workaround.js') }}"></script>
        <script src="{{ URL::to('src/frontend/js/frontend.js') }}"></script>
        @yield('scripts')
    </body>
</html>