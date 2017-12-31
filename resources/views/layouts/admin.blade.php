<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="admin-page">
        <div class="admin-wrapper">
            @include('includes.admin.sidebar')
            @include('includes.admin.navbar')

            <div class="admin-content-wrap">
                <main class="admin-main">
                    @yield('content')
                </main>

                @include('includes.admin.footer')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
