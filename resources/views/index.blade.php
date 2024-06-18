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
    <link rel="stylesheet" href="{{ asset('css/bg-image.css') }}">

    <title>

        Selamat Datang

    </title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="bg-light p-5 border" style="border-radius: 10px">
            <h1 class="fs-3 text-center mb-0">Selamat Datang Di</h1>

            <h1 class="text-primary fs-1 fw-bold text-center mx-auto my-5 p-3 shadow-lg"
                style="width: max-content; border-radius: 10px; transform: rotate(352deg)">
                TECH <br> NEWS
            </h1>

            <div class="d-flex justify-content-center">
                <a href="{{ route('login') }}" class="btn btn-primary d-block col-5 mx-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-success d-block col-5 mx-2">Register</a>
            </div>
        </div>
    </div>

    {{-- Bootstrap 5.3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
