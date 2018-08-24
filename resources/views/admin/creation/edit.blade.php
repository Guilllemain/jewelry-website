@extends('layouts.admin')

@section('content')
	<form method="POST" action="/admin/creation/edit/{{ $product->id }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="field">
		  <label class="label">Nom</label>
		  <div class="control">
		    <input name="name" class="input" type="text" value="{{ $product->name }}">
		  </div>
		</div>
		<div class="field">
		  	<label class="label">Caractéristiques</label>
		  	<div class="control">
				<textarea name="features" class="textarea" rows="3">{{ $product->features }}</textarea>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Description</label>
		  	<div class="control">
				<textarea name="description" class="textarea" rows="10">{{ $product->description }}</textarea>
			</div>
		</div>
		<div class="field">
		  	<label class="label">Vignette</label>
		  	<p class="help">Taille obligatoire : 300 x 300 px</p>
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
		  	<p class="help">5 images maximum</p>
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
			axios.delete('/admin/creation/image/' + id)
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
		CKEDITOR.replace('features');
	</script>
	<script>
		let file = document.getElementById("thumbnail");
		file.onchange = () => {
		    if(file.files.length > 0)
		    {
		      document.getElementById('thumbnail_name').innerHTML = file.files[0].name;
		    }
		};

		let files = document.getElementById("product_img");
		files.onchange = () => {
		    if(files.files.length > 0)
		    {
		      document.getElementById('product_img_name').innerHTML = files.files.length + ' fichiers sélectionnés';
		    }
		};
	</script>
@endsection