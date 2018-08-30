@extends('layouts.front')

@section('content')
	<div class="row">
		<div class="col-md-2 offset-2">
			<img src="{{ asset($profile->image) }}" style="width: 100%">
		</div>
		<div class="col-md-6">
			{!! $profile->bio !!}
		</div>
	</div>
@endsection