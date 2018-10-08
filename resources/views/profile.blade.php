@extends('layouts.front')

@section('content')
	<div class="row">
		<div class="col-md-4 col-xl-3 offset-xl-1 w-full mb-4">
			<img src="{{ $profile->image }}">
		</div>
		<div class="col-md-8 col-xl-7 text-sm md:text-base">
			{!! $profile->bio !!}
		</div>
	</div>
@endsection