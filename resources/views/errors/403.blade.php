@extends('master')


@section('content')

	<section class="box box-error">

		<h1 class="box-heading"> 
			4O3
		</h1>
		<h2>
			<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>&nbsp;
			Forbidden <small> something was wrong ...</small>
		</h2>

		<a href="{{ route('home') }}"> Be right back to home.</a>

	</section>

@endsection