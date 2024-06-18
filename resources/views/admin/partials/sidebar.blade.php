<li class="nav-item mb-3 border hover-menu" style="border-radius: 5px">
    <a href="{{ route('admin.beranda.index') }}"
        class="nav-link text-light {{ $title === 'Beranda' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-house-door"></i></span>
        Beranda
    </a>
</li>
<li class="nav-item mb-3 border hover-menu" style="border-radius: 5px">
    <a href="{{ route('admin.berita.index') }}"
        class="nav-link text-light {{ $title === 'Berita' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-layout-text-sidebar-reverse"></i></span>
        Berita
    </a>
</li>
<li class="nav-item mb-3 border hover-menu" style="border-radius: 5px"">
    <a href="{{ route('admin.pengumuman.index') }}"
        class="nav-link text-light {{ $title === 'Pengumuman' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-megaphone"></i></span>
        Pengumuman
    </a>
</li>
<li class="nav-item mb-3 border hover-menu" style="border-radius: 5px"">
    <a href="{{ route('admin.kontak.index') }}"
        class="nav-link text-light {{ $title === 'Kontak' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-person-circle"></i></span>
        Kontak
    </a>
</li>
<li class="nav-item mb-3 border hover-menu" style="border-radius: 5px"">
    <a href="{{ route('admin.tentang.index') }}"
        class="nav-link text-light {{ $title === 'Tentang' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-exclamation-circle"></i></span>
        Tentang
    </a>
</li>