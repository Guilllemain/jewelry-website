@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-2 offset-1 intro">
            <hr>
            <p>Issu d’une famille d’artistes, <b>Karl Mazlo</b> se passionne très tôt pour les métiers d’art. Il est diplômé de l’<a href="http://www.ecole-boulle.org/page/histoire-de-lecole">Ecole Boulle</a> en Art du bijou et du joyau. Il se forme auprès de grands joailliers où il acquiert une multitude de techniques traditionnelles. <br>
            Karl sculpte des pièces uniques où il conjugue l’abstrait et le figuratif afin de laisser place à l’imaginaire. Ces précieuses miniatures qu’il façonne entièrement à la main, offrent un voyage au coeur de la matière.</p>
            <hr>
        </div>
        <div class="col-md-7 offset-1">
            <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                {{-- <ul class="carousel-indicators">
                   <li data-target="#slider" data-slide-to="0" class="active"></li>
                   <li data-target="#slider" data-slide-to="1"></li>
                   <li data-target="#slider" data-slide-to="2"></li>
                </ul> --}}
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/image/image1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/image/image2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/image/image3.jpg" alt="Third slide">
                </div>
              </div>
              {{-- <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a> --}}
            </div>
        </div>
    </div>
@endsection
    
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection
