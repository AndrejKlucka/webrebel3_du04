@extends('master')


@section('content')

	<section class="box post-list">
		<h1 class="page-header">
			{!! $title or "This is secreat area ..." !!}
		</h1>

		<article id="post" class="post">
			<header class="post-header">
				<h2>
					<a href="#">Lorem ipsum dolor sit fuga. </a>
				</h2>
			</header>
			<div class="post-content">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium repellat nostrum dignissimos laborum, deleniti non quae tenetur natus dolorem voluptas ratione unde numquam, recusandae quos corporis repellendus iste consequatur fuga.
				</p>
			</div>
			<footer class="post-footer">
				<a href="#" class="read-more">
					read more
				</a>
			</footer>
		</article>
	</section>

@endsection