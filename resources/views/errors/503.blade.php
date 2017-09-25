@extends('master')


@section('content')

    <section class="box box-error">

        <h1 class="box-heading"> 
            503
        </h1>
        <h2>Service Unavailable <small> The server is currently unavailable (overloaded or down)</small></h2>

        <a href="{{ route('home') }}"> Be right back to home.</a>

    </section>

@endsection