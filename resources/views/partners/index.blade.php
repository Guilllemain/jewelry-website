@extends('layouts.front')

@section('content')
	<div class="row">
		<div class="col-xl-10 offset-xl-1">
			<div class="partners__list">
				@foreach($partners as $partner)
					<a class="partners__list-link" href="/collaborations/{{ $partner->id }}">
						@if($partner->logo)
							<img class="partners__list-link-image" src="{{ asset($partner->logo) }}">
						@else
							{{ $partner->name }}
						@endif
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection