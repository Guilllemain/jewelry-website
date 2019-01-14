@extends('layouts.front')

@section('content')
	<div class="row mt-4">
		<div class="col-md-4 col-lg-3 offset-lg-2">
            <div class="profile-image">
                <img src="{{ $profile->image }}">
            </div>
		</div>
		<div class="col-md-8 col-lg-5 profile-bio">
            <div class="profile-bio">
                {!! $profile->bio !!}
            </div>
		</div>
	</div>
@endsection