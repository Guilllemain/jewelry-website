@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/expositions" enctype="multipart/form-data">
		@csrf
		<div class="field">
		  <label class="label">Nom<span class="text-danger">&lowast;</span></label>
		  <div class="control">
		    <input name="name" class="input" type="text" value="{{ old('name') }}" required>
		  </div>
		</div>
		<div class="field">
		  <label class="label">Titre<span class="text-danger">&lowast;</span></label>
		  <div class="control">
		    <input name="title" class="input" type="text" value="{{ old('title') }}" required>
		  </div>
		</div>
		<div class="field">
			<label class="label">Images</label>
			<div class="control">
				<div class="file has-name">
					<label class="file-label">
						<input id="images" class="file-input" type="file" name="images[]" multiple>
						<span class="file-cta">
							<span class="file-icon">
								<i class="fas fa-upload"></i>
							</span>
							<span class="file-label">
								Choisis un ou plusieurs fichiers
							</span>
						</span>
						<span id="image_name" class="file-name">
						</span>
					</label>
				</div>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Description<span class="text-danger">&lowast;</span></label>
		  	<div class="control">
				<textarea name="description" class="textarea" rows="10" required>{{ old('description') }}</textarea>
			</div>
		</div>
		<div class="field">
		  <label class="label">Lien</label>
		  <p class="help">Mettre le lien avec http</p>
		  <div class="control">
		    <input name="link" class="input" type="text" value="{{ old('link') }}">
		  </div>
		</div>
		<div class="columns">
			<div class="column is-3">
				<div class="field">
				  <label class="label">Début</label>
				  <div class="control">
				    <input name="date_start" class="input" type="date" value="{{ old('date_start') }}">
				  </div>
				</div>
			</div>
			<div class="column is-3">
				<div class="field">
				  <label class="label">Fin</label>
				  <div class="control">
				    <input name="date_end" class="input" type="date" value="{{ old('date_end') }}">
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
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		CKEDITOR.replace('description');

		displayFileName('images', 'image_name', true)
	</script>
@endsection