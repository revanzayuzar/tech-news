<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap 5.3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>

        @yield('title')

    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg col-12 bg-primary position-fixed top-0" data-bs-theme="dark" style="z-index: 999">

        {{-- Navbar --}}
        @yield('navbar')
        {{-- Navbar End --}}

    </nav>

    <div class="content">

        {{-- Content --}}
        @yield('content')
        {{-- Content End --}}

    </div>

    <footer class="container py-3 border-top" style="margin-top: 100px">
        <h1 class="fs-3 fw-bold text-center">TECH <br> NEWS</h1>
        <small class="d-block mx-auto border-top mt-3 px-3 pt-2" style="width: max-content">Design by Revan | 2024</small>
    </footer>

    {{-- Bootstrap 5.3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
