@extends('layouts.layout')
@section('hortinha')
<div class="container">
<br>
<h1>TELA DE LOGIN</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Senha</label>
  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
</div>
<button type="submit" class="btn btn-dark">Entrar</button>
</form>
<div>
@endsection
