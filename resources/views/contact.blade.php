@extends('layouts.front')

@section('content')
	<div class="flex flex-col md:flex-row flex-col-reverse">
		<div class="col-md-6 col-xl-5 offset-xl-1">
			<div class="md:pr-4">
				<h2 class="mb-2 pb-2 text-center text-xl lg:text-2xl">Formulaire de contact</h2>
				@if($errors)
				    @foreach($errors->all() as $error)
				        <div class="alert alert-danger">{{ $error }}</div>
				    @endforeach
				@endif
				@if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				@endif
				
				<form class="form-horizontal" method="POST" action="/contact">
					@csrf 
					<div class="form-group">
						<label for="Name">Nom :</label>
						<input type="text" class="form-control" name="name" required>
					</div>

					<div class="form-group">
						<label for="email">Email :</label>
						<input type="text" class="form-control" name="email" required>
					</div>

					<div class="form-group">
						<label for="message">Message :</label>
						<textarea type="text" class="form-control luna-message" name="message" rows="10" required></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-secondary rounded" value="Send">Envoyer</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6 col-xl-5">
			<div class="md:pl-4">
				<div class="text-sm">
					<p>Sur rendez-vous aux <a href="http://www.ateliersdeparis.com/">Ateliers de Paris</a> | 30 rue du Faubourg Saint Antoine - 75012 Paris</p>
					<p>mail: <a href="mailto:mazlokarl@gmail.com">mazlokarl@gmail.com</a></p>
					<p>mobile: +33(1)7 62 68 91 59</p>
					<div class="pb-3">
					    <a class="text-grey-darker" href="https://www.instagram.com/karlmazlo/" target="_blank"><i class="fab fa-instagram mr-2 fa-2x"></i></a>
					    <a class="text-grey-darker" href="https://www.facebook.com/karlmazlo" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
					</div>
				</div>
				<iframe class="w-full h-64 md:h-88 lg:h-104 xl:h-128 border-solid border-grey-darker border mb-4 md:mb-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.3042192108874!2d2.371612!3d48.852409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c575aafb992caa6!2sAteliers+de+Paris!5e0!3m2!1sfr!2sfr!4v1534860655252" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
@endsection