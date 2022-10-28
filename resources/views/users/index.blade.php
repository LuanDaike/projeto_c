@extends('layouts.layout')
@section('hortinha')
  <div class="container-fluid">
    <br>
    <div class="d-flex justify-content-center">
    <h1><b>Funcionários</b></h1></div>
    <div class="d-flex justify-content-center"><a href="{{route('user.create')}}" class="btn btn-secondary">Criar Novo Funcionário</a></div>
     <br>
    <table class="table bg-light">
      <thead>
        <tr class="table bg-secondary">
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Editar</th>
          <th scope="col">Remover</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->cpf}}</td>
          <td>{{$user->address}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->email}}</td>
          <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-success">
            <i>Editar</i>
          </a></td>

          <td><form action="{{route('user.destroy', $user->id)}}" method="post">
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
