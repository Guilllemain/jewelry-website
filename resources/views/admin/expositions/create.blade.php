@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/expositions" enctype="multipart/form-data">
		@csrf
		<div class="field">
		  <label class="label">Nom</label>
		  <div class="control">
		    <input name="name" class="input" type="text" value="{{ old('name') }}" required>
		  </div>
		</div>
		<div class="field">
		  <label class="label">Titre</label>
		  <div class="control">
		    <input name="title" class="input" type="text" value="{{ old('title') }}" required>
		  </div>
		</div>
		<div class="field">
		  	<label class="label">Affiche</label>
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
		</div>
		<div class="field">
		  	<label class="label">Description</label>
		  	<div class="control">
				<textarea name="description" class="textarea" rows="10" required>{{ old('description') }}</textarea>
			</div>
		</div>
		<div class="field">
		  <label class="label">Lien</label>
		  <div class="control">
		    <input name="link" class="input" type="text" value="{{ old('link') }}">
		  </div>
		</div>
		<div class="columns">
			<div class="column is-3">
				<div class="field">
				  <label class="label">Début</label>
				  <div class="control">
				    <input name="date_start" class="input" type="date" value="{{ old('date_start') }}" required>
				  </div>
				</div>
			</div>
			<div class="column is-3">
				<div class="field">
				  <label class="label">Fin</label>
				  <div class="control">
				    <input name="date_end" class="input" type="date" value="{{ old('date_end') }}" required>
				  </div>
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
<script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('description');
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