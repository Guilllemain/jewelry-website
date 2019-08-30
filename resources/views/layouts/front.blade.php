<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karl Mazlo - Artiste Joaillier</title>

        @yield('meta-description')
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        @yield('css')        
    </head>

    <body>
        <div class="main">
            @include('partials.menu')
            <div class="main-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer>
                <div class="footer">
                    <a class="footer__mentions" href="/mentions">© Karl Mazlo | 2018</a>
                    <a class="social-icons" href="https://www.instagram.com/karlmazlo/" target="_blank">
                        <i class="fab fa-instagram mr-2 fa-2x"></i>
                    </a>
                    <a class="social-icons" href="https://www.facebook.com/karlmazlo" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                </div>
            </footer>
        </div>
    </body>
    
    @yield('javascript')
    @stack('script')
</html>
