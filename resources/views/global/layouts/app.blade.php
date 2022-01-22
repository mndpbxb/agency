<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid px-5 py-2">
            <a class="navbar-brand fs-4 fw-bold" href="{{ config('app.url', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ config('app.url', 'Home').'/home' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ config('app.url', 'Recent-Ads') .'/recent-ads'}}">Recent Ads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ config('app.url', 'About-Us') .'/about-us'}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ config('app.url', 'Contact-Us') .'/contact-us'}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container-fluid">
        @yield('content')

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>
