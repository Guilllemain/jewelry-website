@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/partners" enctype="multipart/form-data">
		@csrf
		<div class="field">
		  <label class="label">Nom</label>
		  <div class="control">
		    <input name="name" class="input" type="text" value="{{ old('name') }}" required>
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
		</div>
		<div class="field">
		  	<label class="label">Titre</label>
		  	<div class="control">
			    <input name="title" class="input" type="text" value="{{ old('title') }}" required>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Description</label>
		  	<div class="control">
				<textarea name="description" class="textarea" rows="10" required>{{ old('description') }}</textarea>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Vidéo</label>
		  	<p class="help">Insère le code embed ou télécharge la vidéo de ton disque dur (au format .mp4)</p>
		  	<div class="control">
				<textarea name="video_embed" class="textarea" rows="3">{{ old('video_embed') }}</textarea>
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
		</div>
		<div class="field">
		  <div class="control">
		    <button type="submit" class="button is-link">Créer</button>
		  </div>
		</div>
	</form>
@endsection

@section('javascript')
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		CKEDITOR.replace('description');

		displayFileName('logo', 'logo_name')
		displayFileName('partner_video', 'partner_video_name')
		displayFileName('partner_img', 'partner_img_name', true)
	</script>
@endsection