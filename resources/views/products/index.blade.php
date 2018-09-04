@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Découvrez les pièces uniques réalisées par Karl Mazlo. Ces bijoux sont entièrement fabriqués à la main."/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="gallery">
                @foreach($products as $product)
                <a class="gallery-item" href="/creations/{{ $product->id }}">
                    <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                    <span class="text-wrapper">
                        <span class="name">{{ $product->name }}</span>
                    </span>
                </a>
                @endforeach
                {{-- <a class="gallery-item" href="/creations/1">
                    <img src="/image/creations/image1-300x300.jpg" alt="">
                    <span class="text-wrapper">
                        <span class="name">Tomo & Yosh</span>
                    </span>
                </a>
                <a class="gallery-item" href="/creations/1">
                    <img src="/image/creations/image1-300x300.jpg" alt="">
                    <span class="text-wrapper">
                        <span class="name">Tomo & Yosh</span>
                    </span>
                </a> --}}
            </div>
        </div>
    </div>
@endsection    
