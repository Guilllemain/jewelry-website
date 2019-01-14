<div class="nav-menu">
    <div class="nav-icon">
        <i class="fas fa-bars"></i>
    </div>
    <div class="nav-menu__mobile">
        <a class="nav-links" href="/creations">Créations</a>
        <a class="nav-links" href="/portrait">Portrait</a>
        <a class="nav-links" href="/gallery">Galerie</a>
        <a class="nav-links" href="/news">Actualités</a>
        <a class="nav-links" href="/collaborations">Collaborations</a>
        <a class="nav-links" href="/contact">Contact</a>
    </div>
    {{-- <nav class="nav-items">
        <a class="nav-links" href="/creations">Créations</a>
        <a class="nav-links" href="/portrait">Portrait</a>
        <a class="nav-links" href="/gallery">Galerie</a>
        <a class="nav-links" href="/news">Actualités</a>
        <a class="nav-links" href="/collaborations">Collaborations</a>
        <a class="nav-links" href="/contact">Contact</a>
    </nav> --}}
    <div class="nav-right">
        <div class="nav-title">
            <p>Karl Mazlo - Artiste Joaillier</p>
        </div>
        <a href="/">
            <img class="nav-logo" src="{{ asset('images/logo.jpg') }}">
        </a>
    </div>
</div>

@push('script')
    <script>
        const path = window.location.pathname;
        const links = document.querySelectorAll('.nav-links');
        links.forEach(link => {
            if (path.startsWith(link.getAttribute('href'))) {
                link.classList.add('link-active');
            } 
        });

        const menu = document.querySelector('.nav-menu__mobile');
        const menuIcon = document.querySelector('.nav-icon');

        function showMenu() {
            menu.classList.toggle('nav-menu__mobile-active');
            menuIcon.classList.toggle('nav-icon--active');
            document.querySelectorAll('.nav-links').forEach(node => node.classList.remove('link-active'));
        }
        document.querySelector('.nav-icon').addEventListener('click', showMenu);
    </script>
@endpush
