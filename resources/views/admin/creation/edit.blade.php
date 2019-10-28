@extends('layouts.admin')

@section('content')
<form method="POST" action="/admin/creation/edit/{{ $product->id }}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<div class="field">
		<label class="label">Nom<span class="text-danger">&lowast;</span></label>
		<div class="control">
			<input name="name" class="input" type="text" value="{{ $product->name }}" required>
		</div>
	</div>
	<div class="field">
		<label class="label">Caractéristiques<span class="text-danger">&lowast;</span></label>
		<div class="control">
			<textarea name="features" class="textarea" rows="3" required>{{ $product->features }}</textarea>
		</div>
	</div>
	<div class="field">
		<label class="label">Description<span class="text-danger">&lowast;</span></label>
		<div class="control">
			<textarea name="description" class="textarea" rows="10" required>{{ $product->description }}</textarea>
		</div>
	</div>
	<div class="field">
		<label class="label">Vignette<span class="text-danger">&lowast;</span></label>
		<div class="control">
			<div class="file has-name">
				<label class="file-label">
					<input id="thumbnail" class="file-input" type="file" name="thumbnail">
					<span class="file-cta">
						<span class="file-icon">
							<i class="fas fa-upload"></i>
						</span>
						<span class="file-label">
							Choisis un fichier
						</span>
					</span>
					<span id="thumbnail_name" class="file-name">
					</span>
				</label>
			</div>
		</div>
		<img class="img_tumbnail" src="{{ asset($product->thumbnail) }}">
	</div>
	<div class="field">
		<label class="label">Images</label>
		<p class="help">7 images maximum</p>
		<div class="control">
			<div class="file has-name">
				<label class="file-label">
					<input id="product_img" class="file-input" type="file" name="product_img[]" multiple>
					<span class="file-cta">
						<span class="file-icon">
							<i class="fas fa-upload"></i>
						</span>
						<span class="file-label">
							Choisis un ou plusieurs fichiers
						</span>
					</span>
					<span id="product_img_name" class="file-name">
					</span>
				</label>
			</div>
		</div>
		@foreach($product->images as $image)
		<div class="img-wrap" id="image-{{ $image->id }}">
			<span class="delete-image" onclick="deleteImage('/admin/creation/image/', {{$image->id}})">
				<i class="far fa-trash-alt"></i>
			</span>
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
	CKEDITOR.replace('description', {
		height: 300
	});
	CKEDITOR.replace('features', {
		height: 100
	});
	
	displayFileName('thumbnail', 'thumbnail_name')
	displayFileName('product_img', 'product_img_name', true)
</script>
@endsection