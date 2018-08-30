@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/profile/edit/{{ $profile->id }}" enctype="multipart/form-data">
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
			<img class="img_tumbnail" src="{{ asset($profile->image) }}">
		</div>
		<div class="field">
		  	<label class="label">Biographie</label>
		  	<div class="control">
				<textarea id="bio" name="bio" class="textarea" rows="10" required>{{ $profile->bio }}</textarea>
			</div>
		</div>
		<div class="field">
		  <div class="control">
		    <button type="submit" class="button is-link">Modifier</button>
		  </div>
		</div>
	</form>
@endsection

@section('javascript')
	<script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('bio', {
			height: 400
		});
	</script>
	<script>
		let file = document.getElementById('image');
		file.onchange = () => {
		    if(file.files.length > 0)
		    {
		      document.getElementById('image_name').innerHTML = file.files[0].name;
		    }
		};
	</script>
@endsection