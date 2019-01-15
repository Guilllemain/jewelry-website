<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karl Mazlo - Artiste Joaillier</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        @yield('css')
        
    </head>

    <body>
    	<div class="welcome__background" style="background-image:linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),url({{ $image->image_url }});">
			<div class="welcome__page">
				<a class="welcome__logo" href="/creations">
					<img src="images/KM_logo.png">
				</a>
				<div class="h-bar"></div>
				<div class="welcome__text">
					<a class="welcome__text-title" href="/creations">Artiste joaillier</a>
				</div>
			</div>
		</div>
	</body>
</html>