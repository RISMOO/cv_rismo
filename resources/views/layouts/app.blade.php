<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">

@yield('stylesheets')
    <title>{{ config('app.name', 'LABS_RESSOURCES') }}</title>


</head>
<body>

        @include('inc.navbar')

        <div class="container">

            @yield('slider')

    @include('inc.errorsuccess')

    @yield('content')<!--permet d'afficher le contenu -->
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('javascripts')
</body>
</html>

