<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <div class="p-2">
            <img src="{{ asset('assets/frontsite/img/res-minasa-logo.png') }}" alt="" width="55" height="60">
        </div>
        <div>
            <h2 class="m-0 text-primary">Minasa</h2>
        </div>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about.index') }}"
                class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="#" class="nav-item nav-link">Service</a>
            <a href="#" class="nav-item nav-link">Portfolio</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
