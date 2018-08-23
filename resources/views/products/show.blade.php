@extends('layouts.front')

@section('css')
    <link rel="stylesheet" href="/css/magnify.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-5 offset-1">
        <div class="item-description">
            <h1>{{ $product->name }}</h1>
            <div class="item-features">{!! $product->features !!}</div>
            <hr>
            <div class="item-explication">{!! $product->description !!}</div>
        </div>
    </div>
    
    <div class="col-md-5">
      @foreach($product->images as $image)
        <div class="main-img">
            <img class="zoom" data-magnify-src="{{ $image->img_url }}" src="{{ $image->img_url }}">
        </div>
      @endforeach

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        {{-- <div class="caption-container">
          <p id="caption"></p>
        </div> --}}

        <div class="thumbnails-row">
          @foreach($product->images as $number => $image)
            <div class="thumbnails">
              <img class="thumbnail-img cursor" src="{{ $image->img_url }}" onclick="currentSlide({{ $number+1 }})" alt="{{ $product->name }}">
            </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection

@section('javascript')
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/magnify.js') }}"></script>
    <script src="{{ asset('js/magnify-mobile.js') }}"></script>
    <script>
        $(document).ready(function() {
          $('.zoom').magnify();
        });
    </script>
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
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " thumbnail-active";
        // captionText.innerHTML = dots[slideIndex-1].alt;
        for (i = 0; i < thumbnail.length; i++) {
          thumbnail[i].className = thumbnail[i].className.replace(" thumbnail-border", "");
        }
        thumbnail[slideIndex-1].className += " thumbnail-border";
      }
    </script>

    {{-- <script>
        function magnify(imgID, zoom) {
          let img = document.getElementById(imgID);

          /*create magnifier glass:*/
          let glass = document.createElement("DIV");
          glass.setAttribute("class", "img-magnifier-glass");

          /*insert magnifier glass:*/
          img.parentElement.insertBefore(glass, img);

          /*set background properties for the magnifier glass:*/
          glass.style.backgroundImage = "url('" + img.src + "')";
          glass.style.backgroundRepeat = "no-repeat";
          glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
          let bw = 3;
          let w = glass.offsetWidth / 2;
          let h = glass.offsetHeight / 2;

          /*execute a function when someone moves the magnifier glass over the image:*/
          glass.addEventListener("mousemove", moveMagnifier);
          img.addEventListener("mousemove", moveMagnifier);

          /*and also for touch screens:*/
          glass.addEventListener("touchmove", moveMagnifier);
          img.addEventListener("touchmove", moveMagnifier);
          function moveMagnifier(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            x = pos.x;
            y = pos.y;
            /*prevent the magnifier glass from being positioned outside the image:*/
            if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
            if (x < w / zoom) {x = w / zoom;}
            if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
            if (y < h / zoom) {y = h / zoom;}
            /*set the position of the magnifier glass:*/
            glass.style.left = (x - w) + "px";
            glass.style.top = (y - h) + "px";
            /*display what the magnifier glass "sees":*/
            glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
          }

          function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x : x, y : y};
          }
        }

        magnify("image1", 3);    
        magnify("image2", 3);    
    </script> --}}
@endsection