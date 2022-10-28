@extends('layouts.layout')
@section('hortinha')

  <div class="container-fluid">
    <br>
    <div class="d-flex justify-content-center">
    <h1><b>Cardápios</b></h1></div>
    <div class="d-flex justify-content-center"><a href="{{route('menu.create')}}" class="btn btn-secondary">Criar Novo Cardápio</a></div>
    <br>
    <table class="table bg-light">
      <thead>
        <tr class="table bg-secondary">
          <th scope="col"><b>Id</b></th>
          <th scope="col"><b>Nome</b></th>
          <th scope="col"><b>Foto</b></th>
          <th scope="col"><b>Descrição</b></th>
          <th scope="col"><b>Disponibilidade</b></th>
          <th scope="col"><b>Visualizar</b></th>
          <th scope="col"><b>Editar</b></th>
          <th scope="col"><b>Remover</b></th>
        </tr>
      </thead>
      <tbody>
        @foreach($menus as $menu)
        <tr>
          <th scope="row">{{$menu->id}}</th>
          <td>{{$menu->name}}</td>
          <td><img src="{{asset('/storage/'. $menu->image_path)}}" width="80" height="80"></td>
          <td>{{$menu->description}}</td>
          <td>{{$menu->is_active ? 'Disponível' : 'Indisponível' }}</td>
          <td><a href="{{ route('menu.show', $menu->id) }}" class="btn btn-warning">
            <i>Visualizar</i>
          </a>
          <td><a href="{{route('menu.edit', $menu->id)}}" class="btn btn-success">
            <i>Editar</i>
          </a></td>

          <td><form action="{{route('menu.destroy', $menu->id)}}" method="post">
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
