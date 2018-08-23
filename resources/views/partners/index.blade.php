@extends('layouts.front')

@section('css')
<style>
	.partnership {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}
	.link-partner {
		padding: 20px 30px 40px 30px;
	}
</style>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-10 offset-1">
			<div class="partnership">
				@foreach($partners as $partner)
					<a class="link-partner" href="/collaborations/{{ $partner->id }}">
						<img src="{{ asset($partner->logo) }}" style="max-width: 250px; max-height: 150px;">
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection