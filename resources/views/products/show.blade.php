@extends('layouts.front')

@section('css')
    {{-- <link rel="stylesheet" href="/css/magnify.css"> --}}
    <link rel="stylesheet" type="text/css" href="/css/lity.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-1">
        <div class="item-description">
            <h1>{{ $product->name }}</h1>
            <div class="item-features">{!! $product->features !!}</div>
            <hr>
            <div class="item-explication">{!! $product->description !!}</div>
        </div>
    </div>
    
    <div class="col-md-4">
      @foreach($product->images as $image)
        <div class="main-img">
            <img class="zoom" {{-- data-magnify-src="{{ asset($image->img_url) }}"  --}}src="{{ asset($image->img_url) }}" data-lity>
        </div>
      @endforeach

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="thumbnails-row">
          @foreach($product->images as $number => $image)
            <div class="thumbnails">
              <img class="thumbnail-img cursor" src="{{ asset($image->img_thumbnail) }}" onclick="currentSlide({{ $number+1 }})" alt="{{ $product->name }}">
            </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection

@section('javascript')
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/lity.js') }}"></script>
    {{-- <script src="{{ asset('js/magnify.js') }}"></script>
    <script src="{{ asset('js/magnify-mobile.js') }}"></script>
    <script>
        $(document).ready(function() {
          $('.zoom').magnify({
            magnifiedWidth: 1000,
            magnifiedHeight: 1000
          });
        });
    </script> --}}
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
        let i;
        let slides = document.getElementsByClassName("main-img");
        let dots = document.getElementsByClassName("thumbnail-img");
        let thumbnail = document.getElementsByClassName('thumbnails');
        // let captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" thumbnail-active", "");
        }
        slides[slideIndex-1].style.display = "flex";
        dots[slideIndex-1].className += " thumbnail-active";
        // captionText.innerHTML = dots[slideIndex-1].alt;
        for (i = 0; i < thumbnail.length; i++) {
          thumbnail[i].className = thumbnail[i].className.replace(" thumbnail-border", "");
        }
        thumbnail[slideIndex-1].className += " thumbnail-border";
      }
    </script>
@endsection