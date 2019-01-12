<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karl Mazlo</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        @yield('css')
        
    </head>

    <body>
    	<div class="main-image">
			<div class="landing-page">
				<div class="main-logo">
					{{-- <a class="lang" href="/home">FR</a> --}}
					<a class="logo" href="/creations">
						<img src="images/logo.jpg">
					</a>
					{{-- <a class="lang" href="">EN</a> --}}
				</div>
				<div class="h-bar"></div>
				<div id="sub-logo" class="text-sub-logo">
					<a class="sub-title" href="/creations">ARTIST JEWELER</a>
				</div>
			</div>
		</div>
	</body>
</html>