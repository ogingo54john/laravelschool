<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    {{-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset ("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset ("assets/css/navbar.css") }}">

        <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/fontawesome/css/all.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/fontawesome/css/all.min.css") }}">


    @yield('styles')
    @livewireStyles
</head>
<body>
    <div id="app">
@include("company.navbar")
        <main class="m-5">
            @yield('content')
        </main>
    </div>


    <script src="{{ asset("assets/js/jquery.3-6-4.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>

    {{-- other libraries --}}
    <script src="{{ asset("assets/lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("assets/lib/owlcarousel/owl.carousel.min.js" ) }}"></script>

    <!-- Template Javascript -->
    {{-- <script src="{{ asset("assets/js/main.js" ) }}"></script> --}}

    <script src="{{ asset("assets/fontawesome/js/all.js") }}"></script>
    <script src="{{ asset("assets/fontawesome/js/all.min.js") }}"></script>


    @yield('scripts')
    @livewireScripts
</body>
</html>
