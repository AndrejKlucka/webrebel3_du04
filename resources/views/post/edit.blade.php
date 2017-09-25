@extends('master')

@section('title', 'EDIT - '.$post->title )

@section('content')

<section class="box post-list">

  <h1 class="box-heading text-muted">Edit a blog post</h1>

  <form action="{{ route('blog.update',$post->slug) }}" method="POST" accept-charset="utf-8" class="post form-horizontal" id="edit-form">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}

	   @include('post.form')

    {{-- Button submit field --}}
    <div class="form-group">
      <button type="submit" class="btn btn-primary">
        {{ $submitButtonText ?? 'Upload' }}
      </button>

      <a class="btn btn-link" href="{{ URL::previous() }}">
        Back
      </a>
    </div>
  </form>
</section>

@endsection