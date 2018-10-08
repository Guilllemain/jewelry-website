@extends('layouts.front')

@section('css')
  <link rel="stylesheet" type="text/css" href="/css/lity.css">
@endsection

@section('content')
  <div class="flex flex-col-reverse md:flex-row">
    <div class="col-md-6 col-lg-5 offset-lg-1 md:mr-10">
      <div class="mt-10">
          <h1 class="font-bold mb-2 text-2xl">{{ $product->name }}</h1>
          <div class="font-light italic leading-loose">{!! $product->features !!}</div>
          <hr class="w-1/2 ml-0">
          <div class="pt-3">{!! $product->description !!}</div>
      </div>
    </div>
    
    <div class="col-lg-5 col-md-6">
      <div class="flex items-center">
        <a class="prev-icon cursor-pointer text-xl" onclick="plusSlides(-1)">&#10094;</a>
        
        @foreach($product->images as $image)
          <div class="main-img w-full pt-100 relative items-center">
              <img class="pin w-full absolute m-auto" src="{{ asset($image->img_url) }}" data-lity>
          </div>
        @endforeach

        <a class="next-icon cursor-pointer text-xl" onclick="plusSlides(1)">&#10095;</a>
      </div>

      <div class="flex flex-wrap items-center justify-start">
        @foreach($product->images as $number => $image)
          <div class="thumbnails m-1 flex relative cursor-pointer" onclick="currentSlide({{ $number+1 }})">
            <img class="thumbnail-img pin w-full absolute m-auto" src="{{ asset($image->img_thumbnail) }}" alt="{{ $product->name }}">
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

@section('javascript')
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