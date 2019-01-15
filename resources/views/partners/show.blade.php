@extends('layouts.front')

@section('css')
	<link rel="stylesheet" type="text/css" href="/css/lity.css">
	<link type="text/css" rel="stylesheet" href="/css/lightslider.css" />
@endsection

@section('content')
	<div class="row partner">
		<div class="col-md-6 col-xl-5 offset-xl-1">
			<div class="partner__infos">
				<h2>{{ $partner->title }}</h2>
				<hr>
				<div class="partner__description">{!! $partner->description !!}</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-5">
			@if($partner->video_local)
				<video style="width: 100%" controls>
					<source src="{{ asset($partner->video_local) }}" type="video/mp4">
				</video>
			@endif
			@if($partner->video_embed)
				{!! $partner->video_embed !!}
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			@if(count($partner->images) > 5)
				<div class="lSAction slider-controls">
					<a class="lSPrev">&#10094;</a>
		        	<a class="lSNext">&#10095;</a>
				</div>
			@endif
			<div id="responsive" class="partner__images">
				@foreach($partner->images as $image)
					<a class="partner__images-link" href="{{ asset($image->img_url) }}" data-lity>
						<img src="{{ asset($image->img_thumbnail) }}">
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="{{ asset('js/lity.js') }}"></script>
	<script src="{{ asset('js/lightslider.js') }}"></script>
	<script>
		$(document).ready(function() {
		    let slider = $('#responsive').lightSlider({
		        item:5,
		        loop:true,
		        controls: false,
		        slideMove: 2,
		        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
		        speed: 600,
		        responsive : [
		            {
		                breakpoint:800,
		                settings: {
		                    item:3,
		                    slideMove:1,
		                    slideMargin:6,
		                  }
		            },
		            {
		                breakpoint:480,
		                settings: {
		                    item:2,
		                    slideMove:1
		                  }
		            }
		        ]
		    });
		    $('.lSAction > .lSPrev').click(function () {
		        slider.goToPrevSlide();
		    });
		    $('.lSAction > .lSNext').click(function () {
		        slider.goToNextSlide();
		    });  
		  });
	</script>
@endsection