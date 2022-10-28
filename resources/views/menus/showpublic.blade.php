<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body style="background-image: url(https://www.itl.cat/pngfile/big/190-1902483_winter-1080p-white-winter-wallpaper-hd.jpg)">
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <h1><b>{{$menu->name}}</b></h1>
    </div>
      <div class="d-flex justify-content-center">
        <div class="row row-cols-4 row-cols-md-4 g-2">
   @foreach($menu->products as $product)
    <div class="col">
    <div class="card text-bg-dark mb-3 border-info" style="width: 25rem;">
      <img src="{{asset('/storage/'. $product->image_path)}}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a target="_blank" href="{{route('product.show', $product->id)}}"><b>Nome: </b>{{$product->name}}</a></h5>
        <h5 class="card-text"><b>Descrição: </b>{{$product->description}}</h5>
        <h5 class="card-title"><b>Preço: </b>{{$product->price_center/100}}</h5>
        <h5 class="card-text"><b>Disponibilidade: </b>{{$product->it_available ? 'Disponível' : 'Indisponível' }}</h5>
      </div>
      <div class="card-body">
        <a href="#" class="card-link"><b>Adicionar Ao Pedido</b></a>
        <a href="#" class="card-link"><b>Remover Do Pedido</b></a>
      </div>
    </div>
  </div>
  @endforeach
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
