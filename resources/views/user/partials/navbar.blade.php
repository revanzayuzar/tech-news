<div class="container">
    <a href="{{ route('user.beranda.index') }}" class="navbar-brand">
        <h1 class="text-light fs-6 fw-bold text-center mb-0">TECH <br> NEWS</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="{{ route('user.beranda.index') }}" class="nav-link {{ $title === 'Beranda' ? 'active' : '' }}">
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.berita.index') }}" class="nav-link {{ $title === 'Berita' ? 'active' : '' }}">
                    Berita
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.pengumuman.index') }}" class="nav-link {{ $title === 'Pengumuman' ? 'active' : '' }}">
                    Pengumuman
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.kontak.index') }}" class="nav-link {{ $title === 'Kontak' ? 'active' : '' }}">
                    Kontak
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.tentang.index') }}" class="nav-link {{ $title === 'Tentang' ? 'active' : '' }}">
                    Tentang
                </a>
            </li>
        </ul>

        <div>
            <a href="#" class="btn btn-outline-light d-none">
                <span>Sign In</span>
                <i class="bi bi-door-open"></i>
            </a>

            <div class="dropdown">
                <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile" id="profileDropdown"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" class="rounded-circle"
                    style="width: 40px">
                <ul class="dropdown-menu dropdown-menu-end color-1 mt-4 px-3" aria-labelledby="profileDropdown"
                    style="width: max-content">
                    <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile"
                        class="rounded-circle d-block mx-auto my-3" style="width: 60px">
                    <h1 class="text-light fs-5 fw-semibold text-center">{{ Auth::user()->name }}</h1>
                    <small class="d-block text-light text-center mb-3">
                        {{ Auth::user()->email }}
                    </small>
                    <small class="d-block text-light text-center py-1 border-top border-bottom border-light">
                        Sebagai User
                    </small>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger d-block mx-auto my-3">
                            <span style="margin-right: 5px">Logout</span>
                            <i class="bi bi-arrow-right-square"></i>
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>