@extends('master')


@section('content')

	<section class="box box-error">

		<h1 class="box-heading"> 
			401 
		</h1>
		<h2>Page Unauthorized <small> something was wrong ...</small></h2>

		<a href="{{ route('home') }}"> Be right back to home.</a>

	</section>

@endsection