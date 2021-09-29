<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>@yield('title', Request::path()) — {{ config('app.name', 'Laravel') }}</title>
        
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap-4.6.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/main.css') }}">
    </head>

    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sites.index') }}">Сайты</a>
                        </li>

                        @if (Auth::check())
                            <li class="nav-item flex-grow-1"></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i data-feather="user"></i> {{ Auth::user()->name }} ({{ __('Logout') }})
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="breadcrumbs-wrap">
            <div class="container">
                @yield('breadcrumb')
            </div>
        </div>

        <main class="container my-4">
            
            @include('includes/flash-message')

            @yield('content')
        </main>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('/assets/bootstrap-4.6.0/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="{{ asset('/assets/main.js') }}"></script>
    </body>
</html>
