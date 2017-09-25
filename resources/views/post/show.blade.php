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
					<div class="pull-right edit-links">
						
						<a href="{{ route('blog.edit', $post->slug ) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit post">
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> edit
						</a>
						<a href="{{ route('blog.delete', $post->slug ) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete post">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> delete
						</a>

					</div>
					{{-- @endcan --}}

					<time datetime="{{ $post->datetime }}">
						<small>{{ $post->created_at }}</small>
					</time>
				</h1>
			</header>

			<div class="post-content">
				{!! $post->rich_text !!}

				<p class="written-by small">
					<small>- written by <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
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