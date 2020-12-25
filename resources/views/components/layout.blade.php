<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="d-flex flex-column min-vh-100">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="/">News Board</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                            <a class="btn btn-outline-dark" href="{{ route('bookmarks.index') }}" role="button">Bookmarks</a>
                        </div>
                    </div>
                </nav>
            </header>
            <main class="bg-white flex-fill">
                <div class="container">
                    {{ $slot }}
                </div>
            </main>
            <footer>
                <div style="background-color: #F5F6F7;">
                    <div class="container">
                        <div class="row" style="height: 100px;">
                            <div class="col my-auto text-center">
                                AS DELFI - test task for candidates for the position of Web programmer
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
