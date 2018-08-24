@extends('layouts.front')

@section('content')
	<div class="row">
		<div class="col-md-10 offset-1">
			<div class="partnership">
				@foreach($partners as $partner)
					<a class="link-partner" href="/collaborations/{{ $partner->id }}">
						@if($partner->logo)
							<img src="{{ asset($partner->logo) }}" style="max-width: 250px; max-height: 150px;">
						@else
							{{ $partner->name }}
						@endif
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection