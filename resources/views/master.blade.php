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

	<header class="container">
		{{--navigation n stuff--}}
	    @auth
		<nav class="navigation">
			<div class="btn-group btn-group-sm pull-left">
				<a href="{{ url('/') }}" class="btn btn-primary"> home </a>
			</div>
			<div class="btn-group btn-group-sm pull-right">
				<small>
					{{ Auth::user()->email }}
				</small>
  
	            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline-block;">
	                {{ csrf_field() }}
	                <button type="submit" class="btn btn-primary btn-sm">logout</button>
	            </form>
			</div>
		</nav>
	    @endauth

		{{--show status message --}}
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


		{{-- show error message --}}
        @if(count($errors)>0)
        	<ul class="alert alert-dismissible alert-danger">
        		<button type="button" class="close" data-dismiss="alert">&times;</button>
        		@foreach($errors->all() as $error)
        			<li>{{ $error }}</li>
        		@endforeach
        	</ul>
        @endif
		
	</header>

	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>

	<footer class="container">
		{{--copyright n thing--}}
	</footer>


	{{-- <script src="{{ asset('js/jquery.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</body>
</html>