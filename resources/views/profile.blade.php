@extends('layouts.front')

@section('content')
	<div class="row">
		<div class="col-md-4 col-xl-3 offset-xl-2 profile-image">
			<img src="{{ $profile->image }}">
		</div>
		<div class="col-md-8 col-xl-5" style="text-align: justify;">
			{!! $profile->bio !!}
		</div>
	</div>
@endsection