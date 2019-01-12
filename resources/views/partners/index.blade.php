@extends('layouts.front')

@section('content')
	<div class="row">
		<div class="col-xl-10 offset-xl-1">
			<div class="partnership">
				@foreach($partners as $partner)
					<a class="link-partner" href="/collaborations/{{ $partner->id }}">
						@if($partner->logo)
							<img src="{{ asset($partner->logo) }}" style="max-width: 200px; max-height: 100px;">
						@else
							{{ $partner->name }}
						@endif
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection