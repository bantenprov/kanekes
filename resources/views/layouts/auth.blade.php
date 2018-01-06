<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
<<<<<<< HEAD
        @include('includes.head')
=======
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
>>>>>>> e8ba71dcc01b70ba51cb3acc9663662f06c8c522
    </head>
    <body class="auth-page">
        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
