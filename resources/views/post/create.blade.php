@extends('master')

@section('title', 'Create blog post' )

@section('content')

<section class="box post-list">

  <h1 class="box-heading text-muted">Create a blog post</h1>

  <form action="/blog" method="POST" accept-charset="utf-8" class="post form-horizontal" id="add-form">
    {{ csrf_field() }}

	   @include('post.form')

    {{-- Button submit field --}}
    <div class="form-group">
      <button type="submit" class="btn btn-primary">
        {{ $submitButtonText ?? 'Publish' }}
      </button>

      <a class="btn btn-link" href="{{ URL::previous() }}">
        Back
      </a>
    </div>
  </form>
</section>

@endsection