@extends('master')

@section('title', $post->title)

@section('content')

	<section class="box">
		<article class="post full-post">

			<header class="post-header">
				<h1 class="box-heading">
					<a href="{{ route('blog.show', $post->slug) }}">
						{{ $post->title }}
					</a>

					{{-- @can('edit-post', $post) --}}
						<a href="{{ route('blog.edit', $post->slug ) }}" class="btn btn-xs edit-link">edit</a>
						<a href="{{ route('blog.destroy', $post->slug ) }}" class="btn btn-xs edit-link">&times;</a>
					{{-- @endcan --}}

					<time datetime="{{ $post->datetime }}">
						<small>{{ $post->created_at }}</small>
					</time>
				</h1>
			</header>

			<div class="post-content">
				{!! $post->rich_text !!}

				<p class="written-by small">
					<small>- written by
						<a href="{{ url('user', $post->user_id) }}">{{ $post->user->email }}</a>
					</small>
				</p>
			</div>

			<footer class="post-footer">
				@include('partials.tags')
			</footer>

		</article>
	</section>

@endsection