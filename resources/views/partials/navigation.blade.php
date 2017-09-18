{{--navigation n stuff--}}
@auth
<nav class="navigation">
	<div class="btn-group btn-group-sm pull-left">
		<a href="{{ url('blog/') }}" class="btn btn-primary"> all posts </a>
		<a href="{{ url('user/'.Auth::id() ) }}" class="btn btn-primary"> my posts </a>
		<a href="{{ route('blog.create') }}" class="btn btn-primary"> add new </a>
	</div>
	<div class="btn-group btn-group-sm pull-right">
		<small>
			{{ Auth::user()->email }}
		</small>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline-block;">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary btn-sm">logout</button>
        </form>
	</div>
</nav>
@endauth
