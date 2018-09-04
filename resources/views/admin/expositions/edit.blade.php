@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/expositions/edit/{{ $exposition->id }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="field">
		  <label class="label">Nom</label>
		  <div class="control">
		    <input name="name" class="input" type="text" value="{{ $exposition->name }}" required>
		  </div>
		</div>
		<div class="field">
		  <label class="label">Titre</label>
		  <div class="control">
		    <input name="title" class="input" type="text" value="{{ $exposition->title }}" required>
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
			<img class="img_tumbnail" src="{{ asset($exposition->image) }}">
		</div>
		<div class="field">
		  	<label class="label">Description</label>
		  	<div class="control">
				<textarea name="description" class="textarea" rows="10" required>{{ $exposition->description }}</textarea>
			</div>
		</div>
		<div class="field">
		  <label class="label">Lien</label>
		  <p class="help">Pas obligatoire. Mettre le lien avec http</p>
		  <div class="control">
		    <input name="link" class="input" type="text" value="@if($exposition->link) {{ $exposition->link }} @endif">
		  </div>
		</div>
		<div class="columns">
			<div class="column is-3">
				<div class="field">
				  <label class="label">Début</label>
				  <div class="control">
				    <input name="date_start" class="input" type="date" value="{{ $exposition->date_start->format('Y-m-d') }}" required>
				  </div>
				</div>
			</div>
			<div class="column is-3">
				<div class="field">
				  <label class="label">Fin</label>
				  <div class="control">
				    <input name="date_end" class="input" type="date" value="{{ $exposition->date_end->format('Y-m-d') }}" required>
				  </div>
				</div>
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