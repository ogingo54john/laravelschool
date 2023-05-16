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

        <main>
            @yield('content')
            @include("company.footer")
        </main>
    </div>

<!-- Back to Top -->
<a href="#" class="btn btn-danger back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script src="{{ asset("assets/js/jquery.3-6-4.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>

    {{-- other libraries --}}
    <script src="{{ asset("assets/lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("assets/lib/owlcarousel/owl.carousel.min.js" ) }}"></script>

    <!-- Template Javascript -->
    {{-- <script src="{{ asset("assets/js/main.js" ) }}"></script> --}}

    <script src="{{ asset("assets/fontawesome/js/all.js") }}"></script>
    <script src="{{ asset("assets/fontawesome/js/all.min.js") }}"></script>


    <script src="{{ asset("assets/js/jqBootstrapValidation.min.js") }}"></script>
    <script src="{{ asset("assets/js/subscribe.js") }}"></script>
    <script src="{{ asset("assets/js/axios.js" ) }}"></script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/631cba4837898912e9685d1c/1gck3fbd5';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    @yield('scripts')
    @livewireScripts
</body>
</html>
