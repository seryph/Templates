<html>
    <head>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <title>App - @yield('title')</title>
    </head>
    <body>

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>



    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
