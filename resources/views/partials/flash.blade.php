@if ( session()->has('flash.message') )
	<div class="alert alert-dismissible alert-{{ session()->get('flash.level') }}">		
		<button type="button" class="close" data-dismiss="alert">&times;</button>

		<h4> <strong> {{ title_case( session()->get('flash.level') ) }}</strong></h4>
		<p>{{ session()->get('flash.message') }}</p>
	</div>
@endif