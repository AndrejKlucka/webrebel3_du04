@extends('master')


@section('content')

    <section class="box box-error">

        <h1 class="box-heading"> 
            500 
        </h1>
        <h2>Internal Server Error <small>something was wrong ...</small></h2>

        <a href="{{ route('home') }}"> Be right back to home.</a>

    </section>

@endsection