@extends('master')


@section('title', isset($title) ? $title : 'All posts')


@section('content')

	<section class="box post-list">

		<header class="box-header">
			<h1 class="box-heading text-muted">
				{!! $title or "this is a blog, bitch" !!}
			</h1>
		</header>

		@forelse( $posts as $post )

			<article id="post-{{ $post->id }}" class="post">
				<header class="post-header">
					<h2>
						<a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
						<time datetime="{{ $post->datetime }}">
							<small>/ {{ $post->created_at }}</small>
						</time>
					</h2>
					@include('partials.tags')
				</header>
				<div class="post-content">
					<p>
						{{ $post->teaser }}
					</p>
				</div>
				<footer class="post-footer">
					<a href="{{ route('blog.show', $post->slug) }}" class="read-more">
						read more
					</a>
				</footer>
			</article>

		@empty

			<p>we got nothing :(</p>

		@endforelse
	</section>

@endsection