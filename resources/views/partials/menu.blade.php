<div class="nav">
    <div class="nav__icon">
        <i class="fas fa-bars"></i>
    </div>
    <div class="nav__menu">
        <a class="nav__menu-link" href="/creations">Créations</a>
        <a class="nav__menu-link" href="/portrait">Portrait</a>
        <a class="nav__menu-link" href="/gallery">Galerie</a>
        <a class="nav__menu-link" href="/news">Actualités</a>
        <a class="nav__menu-link" href="/collaborations">Collaborations</a>
        <a class="nav__menu-link" href="/contact">Contact</a>
    </div>
    <div class="nav__right">
        <div class="nav__right-title">
            <p>Karl Mazlo | Artiste Joaillier</p>
        </div>
        <a href="/">
            <img class="nav__right-logo" src="{{ asset('images/logo.jpg') }}">
        </a>
    </div>
</div>

@push('script')
    <script>
        const path = window.location.pathname;
        const links = document.querySelectorAll('.nav__menu-link');
        links.forEach(link => {
            if (path.startsWith(link.getAttribute('href'))) {
                link.classList.add('link-active');
            } 
        });

        const menu = document.querySelector('.nav__menu');
        const menuIcon = document.querySelector('.nav__icon');

        function showMenu() {
            menu.classList.toggle('nav__menu--active');
            menuIcon.classList.toggle('nav__icon--active');
            document.querySelectorAll('.nav__menu-link').forEach(node => node.classList.remove('link-active'));
        }
        document.querySelector('.nav__icon').addEventListener('click', showMenu);
    </script>
@endpush
