<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>@yield('title', Request::path()) — {{ config('app.name', 'Laravel') }}</title>
        
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap-4.6.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/auth.css') }}">
    </head>

    <body>
        <main class="container">
            @yield('content')
        </main>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('/assets/bootstrap-4.6.0/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
