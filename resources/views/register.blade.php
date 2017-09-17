@extends('master')


@section('content')

	<form method="post" action="{{ route('register') }}" class="box box-auth">
		{{ csrf_field() }}

		<h2 class="box-auth-heading">
			Register
		</h2>

		{{-- Text field Email --}}
			
		  <input type="email" 
		    class="form-control" 
		    id="email" 
		    name="email" 
		    placeholder="Email Address"
		    value="{{ old('email') }}"
		    required
		    autofocus>
		
		{{-- Text field Password --}}
		
		  <input type="password" 
		    class="form-control" 
		    id="password" 
		    name="password" 
		    placeholder="Password"
		    required>

		{{-- Text field Password Confirmation --}}
		
		  <input type="password_confirmation" 
		    class="form-control" 
		    id="password" 
		    name="password" 
		    placeholder="Password, AGAIN"
		    required>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

		<p class="alt-action text-center">
			or <a href="{{ route('login') }}">come inside</a>
		</p>
	</form>

@endsection