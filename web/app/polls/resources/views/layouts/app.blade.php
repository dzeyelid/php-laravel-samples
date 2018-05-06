<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Polls</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @section('topbar')
                <div class="top-right">
                    <h1>Polls - @yield('title')</h1>
                </div>
            @show

            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>