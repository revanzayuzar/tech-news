<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap 5.3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @stack('css')

    {{-- Style for DataTables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">

    {{-- Style CSS --}}
    <style>
        .sidebar-button {
            display: none;
        }

        @media (max-width: 991px) {

            .sidebar {
                transform: translateX(-100%);
                transition: all 0.2s ease-out;
                z-index: 999;
            }

            .sidebar-active {
                transform: translateX(0);
                transition: all 0.2s ease-out;
            }

            .sidebar-button {
                display: block;
                color: white;
            }

            .background-dark {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 998;
                background-color: rgba(0, 0, 0, 0.5);
                opacity: 0;
                transform: scale(0);
                transition: opacity 0.2s ease-out;
            }

            .background-dark-active {
                opacity: 1;
                transform: scale(1);
                transition: opacity 0.2s ease-out;
            }

        }
    </style>
    {{-- Style CSS End --}}

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>

        @yield('title')

    </title>
</head>

<body>
    {{-- Container --}}
    <div class="d-flex">
        {{-- Sidebar Container --}}
        <div class="sidebar col-9 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column text-light bg-primary p-3 overflow-y-auto position-absolute top-0 bottom-0"
            style="height: 100vh; left: 0;">
            <a href="{{ route('admin.beranda.index') }}" class="text-decoration-none">
                <h1 class="text-light fs-2 fw-bold text-center mt-3 mb-5">TECH<br>NEWS</h1>
            </a>
            <ul class="nav nav-pills flex-column mb-auto">

                {{-- Sidebar --}}
                @yield('sidebar')
                {{-- Sidebar End --}}

            </ul>
        </div>
        {{-- Sidebar Container End --}}

        {{-- Main Container --}}
        <div class="col-12 col-lg-9 col-xl-10 bg-light overflow-y-auto position-absolute top-0 bottom-0"
            style="right: 0;">
            {{-- Main Header --}}
            <nav class="col-12 col-lg-9 col-xl-10 color-1 d-flex justify-content-between align-items-center shadow-sm px-4 py-3 position-fixed top-0"
                style="right: 0; z-index: 99">
                <div class="d-flex align-items-center">
                    <i class="sidebar-button bi bi-list fs-3" id="sidebarButton"></i>
                    <a href="{{ route('admin.beranda.index') }}" class="text-decoration-none">
                        <h1 class="text-light fs-5 fw-semibold text-center mb-0" style="margin-left: 10px">
                            TECH NEWS
                        </h1>
                    </a>
                </div>

                {{-- Logic : No & Style : Yes --}}
                {{-- <div class="dropdown">
                    <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile" id="profileDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" class="rounded-circle"
                        style="width: 40px">
                    <ul class="dropdown-menu dropdown-menu-end color-1 mt-4 px-3" aria-labelledby="profileDropdown">
                        <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile"
                            class="rounded-circle d-block mx-auto my-3" style="width: 60px">
                        <h1 class="text-light fs-5 fw-semibold text-center">Admin</h1>
                        <a href="#" class="btn btn-danger d-block mt-3 mb-2">
                            <span style="margin-right: 5px">Sign Out</span>
                            <i class="bi bi-arrow-right-square"></i>
                        </a>
                    </ul>
                </div> --}}

                {{-- Logic : Yes & Style : Yes --}}
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
                        <small class="d-block text-light text-center py-1 border-top border-bottom">
                            Sebagai Admin
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

                {{-- Logic : Yes & Style : No --}}
                {{-- <div class="dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div> --}}
            </nav>
            {{-- Main Header End --}}

            {{-- Content Container --}}
            <div class="content pb-5" style="margin-top: 125px">

                {{-- Content --}}
                @yield('content')
                {{-- Content End --}}

            </div>
            {{-- Content Container End --}}

            <footer class="col-12 col-lg-9 col-xl-10 bg-light position-fixed bottom-0 text-center py-1">
                <small>Design by Revan | 2024</small>
            </footer>
        </div>
        {{-- Main Container End --}}

        {{-- Background Dark --}}
        <div class="background-dark"></div>
        {{-- Background Dark End --}}
    </div>
    {{-- Container End --}}

    {{-- Script JS --}}
    <script>
        // Sidebar
        let sidebar = document.querySelector(".sidebar");
        let sidebarButton = document.getElementById("sidebarButton");
        let backgroundDark = document.querySelector(".background-dark");

        sidebarButton.addEventListener("click", function() {
            sidebar.classList.add("sidebar-active");
            backgroundDark.classList.add("background-dark-active");
        });

        document.addEventListener("click", function(event) {
            if (
                !sidebar.contains(event.target) &&
                !sidebarButton.contains(event.target)
            ) {
                sidebar.classList.remove("sidebar-active");
                backgroundDark.classList.remove("background-dark-active");
            }
        });
        // Sidebar End
    </script>
    {{-- Script JS End --}}

    {{-- Bootstrap 5.3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @stack('js')

    {{-- Script for DataTables --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
</body>

</html>
