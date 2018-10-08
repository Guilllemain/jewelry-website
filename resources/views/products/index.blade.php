@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Découvrez les pièces uniques réalisées par Karl Mazlo. Ces bijoux sont entièrement fabriqués à la main."/>
@endsection

@section('content')
    <div class="flex flex-wrap justify-center">
        @foreach($products as $product)
            <a class="p-2" href="/creations/{{ $product->id }}">
                <img class="h-32 w-32 md:h-48 md:w-48 lg:h-76 lg:w-76 absolute" src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                <span class="relative text-wrapper h-32 w-32 md:h-48 md:w-48 lg:h-76 lg:w-76 flex text-white opacity-0 justify-center items-center">
                    <span class="text-2xl">{{ $product->name }}</span>
                </span>
            </a>
        @endforeach
    </div>
@endsection    
