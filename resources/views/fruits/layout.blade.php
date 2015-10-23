<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                text-align: center;
                font-weight: 100;
                font-family: 'Lato';
                font-size: 48px;
                
            }

        </style>
    </head>
    <body>   
        @section('body')
        @show
    </body>
</html>