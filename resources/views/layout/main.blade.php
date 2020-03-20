<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Sistem Akademik<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/mahasiswa')}}">Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/students')}}">Mahasiswa</a>
                </li>
          </ul>
        </div>
      </nav>
    @yield('container')
  </body>
</html>