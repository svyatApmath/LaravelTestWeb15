
<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>Country - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Countries!
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>