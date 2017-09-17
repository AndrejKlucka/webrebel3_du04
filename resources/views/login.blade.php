@extends('master')


@section('content')

	<form class="box box-auth" action="{{ route('login') }}" method="POST">
		{{ csrf_field() }}

		<h2 class="box-auth-heading">
			Login
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
				
		{{-- Check Box Imput - Remember me --}}
		
		<label class="checkbox">
		  <input  type="checkbox" 
		  	id="rememberMe" 
		  	name="rememberMe"
		    value="remember-me" 
		    checked>
		  Remember me
		</label>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

		<p class="alt-action text-center">
			or <a href="{{ route('register') }}">create account</a>
		</p>

	</form>

@endsection