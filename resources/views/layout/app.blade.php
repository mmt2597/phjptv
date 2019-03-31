<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                /*font-weight: 200;*/
                height: 100vh;
                margin: 0;
            }

            footer.bottom-footer {
                text-align: center;
            }
        </style>

        @yield('after_styles')

    </head>
    <body>
        @include('layout.navbar')
		@yield('content')
        @include('layout.footer')
	</body>
		
			
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	@yield('after_scripts')
</html>