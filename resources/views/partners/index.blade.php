@extends('layouts.front')

@section('content')
	<div class="col-xl-10 offset-xl-1">
		<div class="flex flex-wrap items-center justify-center">
			@foreach($partners as $partner)
				<a class="p-4" href="/collaborations/{{ $partner->id }}">
					@if($partner->logo)
						<img class="max-w-16 max-h-10" src="{{ asset($partner->logo) }}">
					@else
						{{ $partner->name }}
					@endif
				</a>
			@endforeach
		</div>
	</div>
@endsection