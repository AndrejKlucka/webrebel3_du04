{{-- Text field Title --}}
<div class="form-group row{{ $errors->has('title') ? ' has-error' : '' }}">

  <input type="text" 
    class="form-control" 
    id="title" 
    name="title" 
    placeholder="Write intristing title"
    value="{{ old('title') }}"
    autofocus>

  @if ($errors->has('title'))
    <span class="help-block "> {{ $errors->first('title') }}</span>
  @endif
    
</div>



{{-- Textarea field Text --}}
<div class="form-group row{{ $errors->has('text') ? ' has-error' : '' }}">

	<textarea 
		name="text" 
		class="form-control" 
		rows="16" 
		id="text"  
		placeholder="write intristing content"
		>{{ old('text') }}</textarea>

  @if ($errors->has('text'))
    <span class="help-block "> {{ $errors->first('text') }}</span>
  @endif

</div>

{{-- Tags Field --}}
<div class="form-group">
	@foreach($tags as $tag)
		<label class="checkbox">

      <input 
        type="checkbox" 
        name="tags[]" 
        value="{{ $tag->id }}" 
        @if(is_array(old('tags')) && in_array( $tag->id , old('tags'))) 
          checked 
        @endif>{{ $tag->tag }}

		</label>
	@endforeach
</div>