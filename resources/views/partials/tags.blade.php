@if ( $post->tags )

	<p class="tags">
		@foreach ( $post->tags as $tag )
			<a href="{{ url('tag', $tag->id) }}" class="btn btn-danger btn-xs">
				{{ $tag->tag  }}
			</a>
		@endforeach
	</p>

@endif