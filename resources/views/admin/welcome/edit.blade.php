@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/welcome/{{ $welcomeImage->id }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="field">
		  	<label class="label">Image</label>
		  	<div class="control">
				<div class="file has-name">
				  <label class="file-label">
				    <input id="image" class="file-input" type="file" name="image">
				    <span class="file-cta">
				      <span class="file-icon">
				        <i class="fas fa-upload"></i>
				      </span>
				      <span class="file-label">
				        Choisis un fichier
				      </span>
				    </span>
				    <span id="image_name" class="file-name">
				    </span>
				  </label>
				</div>
			</div>
			<img class="img_tumbnail" src="{{ asset($welcomeImage->image_url) }}">
		</div>
		<div class="field">
		  <div class="control">
		    <button type="submit" class="button is-link">Modifier</button>
		  </div>
		</div>
	</form>
@endsection

@section('javascript')
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		displayFileName('image', 'image_name')
	</script>
@endsection