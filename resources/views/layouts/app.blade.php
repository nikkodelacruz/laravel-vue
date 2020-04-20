<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Adding style -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'laraVue')}}</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
		@include('inc.navbar')
    	<div class="container">
            @include('inc.messages')
    		@yield('content')
    	</div>

        @yield('footer')
    </body>
</html>
