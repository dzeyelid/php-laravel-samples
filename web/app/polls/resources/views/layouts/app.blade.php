<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Polls</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <script src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>
        <div class="container">
            @section('topbar')
                <div class="row align-items-start">
                    <div class="col">
                        <h1>Polls - @yield('title')</h1>
                    </div>
                </div>
            @show
        </div>
            
        @yield('content')
    </body>
</html>