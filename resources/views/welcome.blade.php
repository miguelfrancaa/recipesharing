<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'RecipeSharing') }}</title>

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <body>
        <header class="pt-3 pb-3">
            <div class="container">
            <div class="row">
            <div class="col-md-2"><img class="w-100" src="{{URL('/images/logo.png')}}"></div>
                <div class="col-md-10 d-flex justify-content-end align-items-center">   
                @if (Route::has('login'))
                    @auth
                        <a class="loginLinks" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="loginLinks" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="ms-3 loginLinks" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
                </div> 
            </div>
            </div>
            </div>
        </header>
    </body>
</html>
