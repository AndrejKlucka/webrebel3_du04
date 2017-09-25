<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title', 'bitch be bloggin')</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.simplex.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="{{ Request::segment(1) ?: 'home' }}">

<body id="{{ body_id() }}" class="{{ body_class() }}">

	<header class="container">

		@include('partials.errors')

		@include('partials.flash')

		@include('partials.navigation')
		
	</header>

	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>

	<footer class="container">
		{{--copyright n thing--}}
	</footer>


	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>