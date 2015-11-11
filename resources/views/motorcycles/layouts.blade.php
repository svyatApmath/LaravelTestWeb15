<html>
    <head>
        <title>motorcycles - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        <p align="center">motorcycles</p>
        @show

        <div class="motorcycles">
            @yield('content')
        </div>
    </body>
</html>
