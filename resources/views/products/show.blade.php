@extends('layouts.layout')
@section('hortinha')
<div class="d-flex justify-content-center"><h1>Detalhes Do Produto</h1></div>
<div class="d-flex justify-content-center">
  <ul class="list-group-flush">
    <li class="list-group-item"><b>Nome:</b>  {{$product->name}}</li>
    <li class="list-group-item"><b>Descrição:</b>  {{$product->description}}</li>
    <li class="list-group-item"><b>Preço:</b>  {{$product->price_center}}</li>
    <li class="list-group-item"><b>Disponibilidade:</b>  {{$product->it_available}}</li>
 </ul>
 </div>
 <div class="d-flex justify-content-center gap-3">
 <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-primary"><b>Editar</b></a>
 <a href="{{ route('product.index') }}" class="btn btn-outline-primary"><b>Voltar</b></a>
</div>
 @endsection
