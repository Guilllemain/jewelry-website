@extends('layouts.front')

@section('css')
	<link rel="stylesheet" type="text/css" href="/css/lity.css">
@endsection

@section('content')
	<div class="flex flex-col lg:flex-row">
		<div class="col-lg-5 offset-lg-1 mb-4">
			<h2 class="text-2xl">{{ $partner->title }}</h2>
			<hr class="w-1/2 ml-0">
			<div>{!! $partner->description !!}</div>
		</div>
		<div class="col-lg-5">
			@if($partner->video_local)
				<video class="w-full" controls>
					<source src="{{ asset($partner->video_local) }}" type="video/mp4">
				</video>
			@endif
			@if($partner->video_embed)
				{!! $partner->video_embed !!}
			@endif
		</div>
	</div>
	<div class="col-lg-10 offset-lg-1">
		<div class="main-carousel py-10">
			@foreach($partner->images as $image)
				<div class="carousel-cell xl:w-15% lg:w-1/5 md:w-1/4 w-1/2">
					<a href="{{ asset($image->img_url) }}" data-lity>
						<img class="w-full m-auto" src="{{ asset($image->img_thumbnail) }}">
					</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection

@section('javascript')
	<script src="{{ asset('js/flickity.js') }}"></script>
	<script src="{{ asset('js/lity.js') }}"></script>
@endsection