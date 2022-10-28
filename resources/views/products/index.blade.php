@extends('layouts.layout')
@section('hortinha')
  <div class="container-fluid">
    <br>
    <div class="d-flex justify-content-center">
    <h1><b>Produtos</b></h1></div>
    <div class="d-flex justify-content-center"><a href="{{route('product.create')}}" class="btn btn-secondary">Criar Novo Produto</a></div>
    <br>
    <table class="table bg-light">
      <thead>
        <tr class="table bg-secondary">
          <th scope="col"><b>Id</b></th>
          <th scope="col"><b>Produto</b></th>
          <th scope="col"><b>Foto</b></th>
          <th scope="col"><b>Descrição</b></th>
          <th scope="col"><b>Preço</b></th>
          <th scope="col"><b>Disponibilidade</b></th>
          <th scope="col"><b>Editar</b></th>
          <th scope="col"><b>Remover</b></th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td><img src="{{asset('/storage/'. $product->image_path)}}" width="100" height="100"></td>
          <td>{{$product->description}}</td>
          <td>{{$product->price_center}}</td>
          <td>{{$product->it_available ? 'Disponível' : 'Indisponível' }}</td>
          <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-success">
            <i>Editar</i>
          </a></td>

          <td><form action="{{route('product.destroy', $product->id)}}" method="post">
              @csrf
              @method('delete')
            <button class="btn btn-danger" type="submit">
              <i class="bi bi-trash3-fill"></i>
            </button>
          </form>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
@endsection
