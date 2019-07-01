@extends('layouts.front')

@section('css')
    {{-- <link rel="stylesheet" href="/css/magnify.css"> --}}
    <link rel="stylesheet" type="text/css" href="/css/lity.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <div class="product__infos">
            <h1>{{ $product->name }}</h1>
            <div class="product__features">{!! $product->features !!}</div>
            <hr>
            <div class="product__description">{!! $product->description !!}</div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-5">
      <div class="product__images">
        
        <div class="product__images__list">
          @foreach($product->images as $image)
            <div class="product__images-main">
                <img class="cursor" src="{{ asset($image->img_url) }}" data-lity>
            </div>
          @endforeach
        </div>

        <div class="product__images-thumbnails">
          @foreach($product->images as $number => $image)
            <div class="product__images-thumbnails__item cursor" onclick="currentSlide({{ $number+1 }})">
              <img class="product__images-thumbnails__item-img" src="{{ asset($image->img_thumbnail) }}" alt="{{ $product->name }}">
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/lity.js') }}"></script>
    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let slides = document.querySelectorAll(".product__images-main");
        let dots = document.querySelectorAll(".product__images-thumbnails__item-img");
        let thumbnails = document.querySelectorAll('.product__images-thumbnails__item');

        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        slides.forEach(slide => slide.style.display = "none");
        dots.forEach(dot => dot.classList.remove("thumbnail-active"));
        
        slides[slideIndex-1].style.display = "flex";
        dots[slideIndex-1].classList.add("thumbnail-active");
        thumbnails.forEach(thumbnail => thumbnail.classList.remove("thumbnail-border"));
        thumbnails[slideIndex-1].classList.add('thumbnail-border');
      }
    </script>
@endsection