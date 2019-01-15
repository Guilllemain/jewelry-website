@extends('layouts.front')

@section('content')
	<div class="row mt-4">
		<div class="col-md-4 col-lg-3 offset-lg-2 offset-xl-3">
            <div class="profile__image">
                <img src="{{ $profile->image }}">
            </div>
		</div>
		<div class="col-md-8 col-lg-5 col-xl-3">
            <div class="profile__bio">
                {!! $profile->bio !!}
            </div>
		</div>
	</div>
@endsection