<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    </head>
    <body class="@yield('body_class')">
        @yield('section_top')

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 order-md-2 mb-4">
					@yield('main_content')
				</div><!-- /col -->
				<div class="col-md-4 order-md-1 mb-4">
					@yield('sidebar')
				</div><!-- /col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->

        @yield('section_bottom')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
