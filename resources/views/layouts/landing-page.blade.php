<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="landing-page">
        @include('includes.landing-page.navbar')

        @include('includes.landing-page.header')

        <main class="landing-main">
            @yield('content')
        </main>

        @include('includes.landing-page.footer')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
