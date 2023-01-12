<!doctype html>
<html lang="en">

    <head>
        @vite([])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <title>Multiple Database</title>

        @vite([
            'public/scripts/bootstrap.min.css',
            'public/scripts/navbar-top-fixed.css'
        ])
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
            <div class="container">
                <a class="navbar-brand" href="{{ route('kta2018') }}">Multiple DB</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::is('kta-2018') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('kta2018') }}">Data KTA 2018</a>
                        </li>

                        <li class="nav-item {{ Request::is('kta-2023') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('kta2023') }}">Data KTA 2023</a>
                        </li>
                    </ul>

                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="container pt-4">
            @yield('content')
        </main>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        @vite([
            'public/scripts/popover.js',
            'public/scripts/bootstrap.min.js'
        ])
    </body>

</html>
