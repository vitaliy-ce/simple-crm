<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>@yield('title') — SimpleCrm</title>
        
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap-4.6.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/main.css') }}">
    </head>

    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">SimpleCrm</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sites.index') }}">Сайты</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-md-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
                    </form>
                </div>
            </div>
        </nav>

        <main class="container my-4">
            @include('includes/flash-message')

            @yield('content')
        </main>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('/assets/bootstrap-4.6.0/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
