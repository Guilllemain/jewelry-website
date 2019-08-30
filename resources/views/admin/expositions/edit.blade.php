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
			@foreach ($exposition->images as $image)
			<div class="img-wrap" id="image-{{ $image->id }}">
				<span class="delete-image" onclick="deleteImage({{$image->id}})">
					<i class="far fa-trash-alt"></i>
				</span>
				<img class="img_thumbnail" src="{{ asset($image->img_url) }}">
			</div>
			@endforeach
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
				    <input name="date_start" class="input" type="date" value="@if($exposition->date_start) {{ $exposition->date_start->format('Y-m-d') }} @endif">
				  </div>
				</div>
			</div>
			<div class="column is-3">
				<div class="field">
				  <label class="label">Fin</label>
				  <div class="control">
				    <input name="date_end" class="input" type="date" value="@if($exposition->date_end) {{ $exposition->date_end->format('Y-m-d') }} @endif">
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
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		CKEDITOR.replace('description');
		
		const deleteImage = id => {
			if (!confirm('Es-tu sûr de vouloir supprimer cette image ?')) {
				return
			}
			axios.delete('/admin/expositions/image/' + id)
			.then((response) => {
				const imageDiv = document.querySelector("#image-" + id);
				imageDiv.parentNode.removeChild(imageDiv);               
			},(error) => {
				console.log(error)
			});
		}
		displayFileName('images', 'image_name', true)
	</script>
@endsection