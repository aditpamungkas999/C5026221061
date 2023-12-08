<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Bolpen</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="{{ url('/bolpen/index') }}">Aditya Aji Pamungkas - 5026221061</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/bolpen/index') }}">Index</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/bolpen/tambah') }}">Tambah</a>
                </li>
            </ul>
        </nav>

        <br/>

        <div class="container">
            @yield('content')
        </div>
        @include('bolpen/footer')
    </body>
</html>