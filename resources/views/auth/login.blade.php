@extends('layout.pages')
@section('content')

<div class="row">
	<div class="">
		@if( !empty($activateMsg))
    		<span>{{ $activateMsg }}</span>
		@endif
		
		login...
	</div>
</div>

@stop