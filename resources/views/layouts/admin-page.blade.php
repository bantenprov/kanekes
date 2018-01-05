<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="admin-page">
        <div class="admin-wrapper">
<<<<<<< HEAD:resources/views/layouts/admin.blade.php
            @include('includes.admin.sidebar')
            @include('includes.admin.navbar')

            <div class="admin-content-wrap">
                <main class="admin-main">
                    @yield('content')
                </main>

                @include('includes.admin.footer')
=======
            @include('includes.admin-page.sidebar')
            @include('includes.admin-page.navbar')

            <div class="admin-content-wrap">
                <div class="admin-main">
                    @yield('content')
                </div>
>>>>>>> e8ba71dcc01b70ba51cb3acc9663662f06c8c522:resources/views/layouts/admin-page.blade.php
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
