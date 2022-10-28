@extends('layouts.layout')
@section('hortinha')
<div class="d-flex justify-content-center"><h1>Detalhes Do Usuário</h1></div>
<div class="d-flex justify-content-center">
  <ul class="list-group-flush">
    <li class="list-group-item"><b>Nome:</b>  {{$user->name}}</li>
    <li class="list-group-item"><b>Email:</b>  {{$user->email}}</li>
    <li class="list-group-item"><b>Senha:</b>  {{$user->password}}</li>
    <li class="list-group-item"><b>CPF:</b>  {{$user->cpf}}</li>
    <li class="list-group-item"><b>Telefone:</b>  {{$user->phone}}</li>
    <li class="list-group-item"><b>Endereço:</b>  {{$user->address}}</li>
 </ul>
 </div>
 <div class="d-flex justify-content-center gap-3">
 <a href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-primary"><b>Editar</b></a>
 <a href="{{ route('user.index') }}" class="btn btn-outline-primary"><b>Voltar</b></a>
</div>
 @endsection
