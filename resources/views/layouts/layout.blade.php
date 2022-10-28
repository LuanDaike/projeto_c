<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Página Inicial</title>
  @vite(['resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body style="background-image: url(https://www.itl.cat/pngfile/big/190-1902483_winter-1080p-white-winter-wallpaper-hd.jpg)">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: url(https://media0.giphy.com/media/Xi2Xu0MejhsUo/200.gif)">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="color:black" href="{{route('menu.index') }}"><b>Cardápios</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color:black" href="{{route('product.index') }}"><b>Produtos</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color:black" href="pedidos"><b>Pedidos</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color:black" href="{{route('user.index') }}"><b>Funcionários</b></a>
          </li>
        </ul>
      </div>
         <div class="d-flex justify-content-end">
        <button class="btn btn-outline-dark" type="submit">
           @guest
               @if (Route::has('login'))
                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
               @endif
             </button>
            <button class="btn btn-outline-light" type="submit">
               @if (Route::has('register'))
                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
               @endif
           @else
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       {{ Auth::user()->name }}
                   </a>

                   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Sair') }}
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                   </div>
           @endguest
         </button>
        </div>
      </div>
  </nav>
  @yield('hortinha')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
