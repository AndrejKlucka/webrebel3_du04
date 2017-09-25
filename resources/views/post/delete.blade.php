@extends('master')


@section('title', 'Delete post')


@section('content')

	<section class="box">

		<header class="post-header">
			<h1 class="box-heading">
				Sure you wanna do this?
			</h1>
		</header>

		{{-- Post Teaser --}}
		<blockquote class="form-group">
			<h3>&ldquo;{{ $post->title }}&rdquo;</h3>
			<p class="teaser">{{ $post->teaser }}</p>
		</blockquote>

		<form action="{{ route('blog.destroy',$post->slug) }}" method="POST" accept-charset="utf-8" class="post form-horizontal" id="delete-form">
			<input name="_method" type="hidden" value="DELETE">
			{{ csrf_field() }}

			{{-- Delete Post Field --}}
		    <div class="form-group">
		      <button type="submit" class="btn btn-primary">
		        {{ $submitButtonText ?? 'Delete post' }}
		      </button>

		      <a class="btn btn-link" href="{{ URL::previous() }}">
		        Back
		      </a>
		    </div>

		</form>
	</section>

@endsection