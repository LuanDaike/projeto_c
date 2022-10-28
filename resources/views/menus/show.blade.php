@extends('layouts.layout')
@section('hortinha')
<div class="d-flex justify-content-center"><h1>Detalhes Do Cardápio</h1></div>
<div class="d-flex justify-content-center">
  <ul class="list-group-flush">
    <li class="list-group-item"><b>Nome:</b>  {{$menu->name}}</li>
    <li class="list-group-item"><b>Descrição:</b>  {{$menu->description}}</li>
    <li class="list-group-item"><b>Disponibilidade:</b>  {{$menu->is_active}}</li>
 </ul>
 </div>
 <div class="d-flex justify-content-center gap-3">
 <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-outline-primary"><b>Editar</b></a>
 <a href="{{ route('menu.index') }}" class="btn btn-outline-primary"><b>Voltar</b></a>
</div>

<br>

<div class="container">
<div class="d-flex flex-row justify-content-center w-100">
        <form class="d-flex flex-row gap-2" action="{{route('menu.product.store', $menu->id) }}" method="post">
         @csrf
         <div>
      <label for="selectproducts"><b>Adicionar Produto:</b></label>
      <select id="selectproducts" class="form-select" name="product_id">
       @foreach($addProducts as $product)
        <option value="{{$product->id}}">{{$product->name}}</option>
       @endforeach
      </select>
    </div>
      <div class="d-flex flex-row justify-content-center">
      <button type="submit" class="btn btn-outline-primary" tittle="Adicionar Novo Prato:">
        <i><b>Adicionar</b></i>
      </button></div>
      </form>
    </div>
    <br>
    <div class="d-flex justify-content-center gap-5">
          <h5>Link Compartilhável!</h5>
    </div>
  <div class="d-flex justify-content-center gap-5">
    <img src="https://chart.googleapis.com/chart?cht=qr&chs=220x220&chl={{urlencode(route('menu.public.show', $menu->id))}}">
    <a href="{{route('menu.public.show', $menu->id)}}">{{route('menu.public.show', $menu->id)}}></a>
  </div>
<table class="table mt-4 table-light">
<thead>
  <tr class="table table-secondary">
    <th>Nome:</th>
    <th>Descrição:</th>
    <th>Preço:</th>
    <th>Disponibilidade:</th>
    <th>Remover</th>
  </tr>
</thead>
<tbody>
  @foreach($menu->products as $product)
  <tr>
    <td><a target="_blank" href="{{route('product.show', $product->id)}}">{{$product->name}}</a></td>
    <td>{{$product->description}}</td>
    <td>{{$product->price_center/100}}</td>
    <td>{{$product->it_available ? 'Disponível' : 'Indisponível' }}</td>
    <td>
      <div class="btn-group" role="group" aria-label="Basic example">
        <form action="{{route('menu.product.destroy', [$menu->id, $product->id])}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger" title="Remover">
            <i class="bi bi-trash"></i>
          </button>
        </form>
      </div>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
 @endsection
