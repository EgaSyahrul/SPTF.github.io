<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            {{-- <img src="{{ asset('assets/img/HomeLogo-removebg-preview.png') }}" alt="Logo" height="30" width="30" class="rounded"> --}}
            <img src="{{ asset('assets/img/Logo.png') }}" alt="Logo" height="20">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-light"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mx-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('products.home') }}"><i class="fas fa-boxes"></i> List Produk</a>
                </li>
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i> Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('profile.index') }}"><i class="fas fa-user-alt"></i> Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('login.logout') }}"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('login.index') }}"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register.index') }}"><i class="fas fa-clipboard-list"></i> Daftar</a>
                </li>
                @endif --}}
            </ul>
        </div>
    </div>
</nav>
