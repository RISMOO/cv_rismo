
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('images/logo-rond.png')}}">
    <meta name="author" content="rismo">
    <!-- Meta Description -->
    <meta name="description" content="mon CV">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>{{ config('app.name', 'Cv Rismo') }}</title>


@yield('stylesheets')<!--permettra d'integrer le contenu sur vos pâges -->

</head>


<body>






   @include('inc.errorsuccess')



    @yield('content')



    <!--permet d'afficher le contenu -->



    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/dopeNav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/main.js"></script>


@yield('javascripts')


</body>


</html>

