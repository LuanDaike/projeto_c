<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-image: url(https://www.itl.cat/pngfile/big/190-1902483_winter-1080p-white-winter-wallpaper-hd.jpg)">
    <div id="app">
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000">
          <div class="container-fluid">
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
          <!-- <span class="navbar-toggler-icon"></span> -->
          <!-- </button> -->
          <div class="d-flex justify-content-end">
          <button class="btn btn-outline-light" type="submit">
          @guest
          @if (Route::has('login'))
          <a class="nav-link" href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
          @endif
          </button>
          <button class="btn btn-outline-light" type="submit">
          @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}"><b>{{ __('Registre-se') }}</b></a>
          @endif
          </button>
          @else
          <div class="d-flex justify-content-end">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" href="{{route('menu.index') }}"><b>Cardápios</b></a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="{{route('product.index') }}"><b>Produtos</b></a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="pedidos"><b>Pedidos</b></a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="{{route('user.index') }}"><b>Funcionários</b></a>
          </li>
          </ul>
          <div><form class="d-flex" role="search">
          <input class="form-control me-4" type="search" placeholder="Pesquisar" aria-label="Search">
          </form>
          </div>
          </div>
          </div>
          </div>
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}</a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
          </div>
          @endguest
          </ul>
          </div>
          </nav>
          <main class="py-4">
          @yield('content')
          </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
