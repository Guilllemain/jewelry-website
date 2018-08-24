@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/partners/edit/{{ $partner->id }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="field">
		  <label class="label">Nom</label>
		  <div class="control">
		    <input name="name" class="input" type="text" value="{{ $partner->name }}" required>
		  </div>
		</div>
		<div class="field">
		  	<label class="label">Logo</label>
		  	<div class="control">
				<div class="file has-name">
				  <label class="file-label">
				    <input id="logo" class="file-input" type="file" name="logo">
				    <span class="file-cta">
				      <span class="file-icon">
				        <i class="fas fa-upload"></i>
				      </span>
				      <span class="file-label">
				        Choisis un fichier
				      </span>
				    </span>
				    <span id="logo_name" class="file-name">
				    </span>
				  </label>
				</div>
			</div>
			@if($partner->logo)
				<img class="img_thumbnail" src="{{ asset($partner->logo) }}">
			@endif
		</div>
		<div class="field">
		  	<label class="label">Titre</label>
		  	<div class="control">
			    <input name="title" class="input" type="text" value="{{ $partner->title }}" required>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Description</label>
		  	<div class="control">
				<textarea name="description" class="textarea" rows="10" required>{{ $partner->description }}</textarea>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Vidéo</label>
		  	<p class="help">Insère le code embed ou télécharge la vidéo de ton disque dur (au format .mp4)</p>
		  	<div class="control">
				<textarea name="video_embed" class="textarea" rows="3">@if($partner->video_embed) {{ $partner->video_embed }} @endif</textarea>
			</div>
			<div class="control">
				<div class="file has-name">
				  <label class="file-label">
				    <input id="partner_video" class="file-input" type="file" name="partner_video">
				    <span class="file-cta">
				      <span class="file-icon">
				        <i class="fas fa-upload"></i>
				      </span>
				      <span class="file-label">
				        Importe une vidéo
				      </span>
				    </span>
				    <span id="partner_video_name" class="file-name">
				    </span>
				  </label>
				</div>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Images</label>
		  	<div class="control">
				<div class="file has-name">
				  <label class="file-label">
				    <input id="partner_img" class="file-input" type="file" name="partner_img[]" multiple>
				    <span class="file-cta">
				      <span class="file-icon">
				        <i class="fas fa-upload"></i>
				      </span>
				      <span class="file-label">
				        Choisis un ou plusieurs fichiers
				      </span>
				    </span>
				    <span id="partner_img_name" class="file-name">
				    </span>
				  </label>
				</div>
			</div>
			@foreach($partner->images as $image)
			<div class="img-wrap" id="image-{{ $image->id }}">
				<span class="close" onclick="deleteImage({{$image->id}})">&times;</span>
				<img class="img_thumbnail" src="{{ asset($image->img_url) }}">
			</div>
			@endforeach
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
		function deleteImage(id) {
			axios.delete('/admin/partners/image/' + id)
			.then((response) => {
				let imageDiv = document.getElementById("image-" + id);
				imageDiv.parentNode.removeChild(imageDiv);               
            },(error) => {
              console.log(error)
            });
		}
	</script>
	<script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('description');
	</script>
	<script>
		let file = document.getElementById('logo');
		let files = document.getElementById("partner_img");
		let video = document.getElementById("partner_video");

		file.onchange = () => {
		    if(file.files.length > 0)
		    {
		      document.getElementById('logo_name').innerHTML = file.files[0].name;
		    }
		};

		files.onchange = () => {
		    if(files.files.length > 0)
		    {
		      document.getElementById('partner_img_name').innerHTML = files.files.length + ' fichiers sélectionnés';
		    }
		};

		video.onchange = () => {
		    if(video.files.length > 0)
		    {
		      document.getElementById('partner_video_name').innerHTML = video.files[0].name;
		    }
		};

	</script>
@endsection