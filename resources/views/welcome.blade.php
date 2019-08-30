<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Issu d’une famille d’artistes, Karl Mazlo se passionne très tôt pour les métiers d’art. Diplômé de l’Ecole Boulle, il se forme auprès de grands joailliers afin d’acquérir une multitude de techniques pour réaliser le bijou entièrement à la main. Il crée des pièces uniques pour des particuliers et restaure des bijoux anciens pour des collectionneurs. Parallèlement il développe des collections de bijoux et d’objets au gré de ses inspirations et collaborations." />
        <title>Karl Mazlo - Artiste Joaillier</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

    <body>
    	<div class="welcome__background" style="background-image:linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),url({{ $image->image_url }});">
			<div class="welcome__page">
				<a class="welcome__logo" href="/creations">
					<img src="images/KM_logo_new.png">
				</a>
				<div class="h-bar"></div>
				<div class="welcome__text">
					<a class="welcome__text-title" href="/creations">Artiste joaillier</a>
				</div>
			</div>
		</div>
	</body>
</html>