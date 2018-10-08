<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karl Mazlo - Artiste Joaillier</title>

        @yield('meta-description')
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        @yield('css')

    </head>

    <body>
        <div id="app" class="flex flex-col justify-between h-full">
            <div class="m-2 md:m-6">
                @include('partials.menu')

                @yield('content')
            </div>
            <footer class="w-full bg-grey-lighter px-4 py-2 text-sm">
                <a href="/mentions">© Karl Mazlo | 2018</a>
            </footer>
        </div>
    </body>
    
    @yield('javascript')
    <script>
        function showMenu() {
            let items = document.querySelectorAll('.nav-links');
            items.forEach(item => item.classList.toggle('nav-links-show'));
            
            let icon = document.querySelector('.nav-icon i');
            icon.classList.toggle('icon-rotate');
        }
        document.querySelector('.nav-icon').addEventListener('click', showMenu);
    </script>
</html>
