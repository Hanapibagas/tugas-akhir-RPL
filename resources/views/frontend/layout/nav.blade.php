<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo"></i> <a href="/">Ceotech_</a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                <li class="{{ request()->is('galery') ? 'active' : '' }}"><a href="#">Galery</a></li>
                <li class="{{ request()->is('history') ? 'active' : '' }}"><a href="#">History</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- End Header -->
