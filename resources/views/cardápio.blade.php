@extends('layouts.layout')
@section('hortinha')
  <div class="container-fluid">
  <h1>Gerenciamento de Cardápios</h1>
  <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MeuModal">Criar Novo Cardápio</button></div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Data Criação</th>
      <th scope="col">Ativo</th>
      <th scope="col">Ver/Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cardápio Principal</td>
      <td>12/05/22</td>
      <td><div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
      <label class="form-check-label" for="flexSwitchCheckChecked"></label></div></td>
      <td><a class="btn btn-primary" href="vizualizaçãodocardápio" role="button">✏️</a></td>
      <td><button class="btn btn-danger" type="submit">🗑️</button></td>
    </tr>
    <tr>
      <td>Cardápio Dia Dos Namorados</td>
      <td>14/05/22</td>
      <td><div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
      <label class="form-check-label" for="flexSwitchCheckChecked"></label></div></td>
      <td><a class="btn btn-primary" href="vizualizaçãodocardápio" role="button">✏️</a></td>
      <td><button class="btn btn-danger" type="submit">🗑️</button></td>
    </tr>
  </tbody>
</table>
</div>
  <div class="modal fade" id="MeuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Cardápio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-inline-flex gap-2">
            <div><label for="exampleName" class="form-label">Nome Do Cardápio:</label></div>
            <div><input type="Name" class="form-control" id="exampleName"></div>
          </div>
          <div class="d-inline-flex gap-2">
          <div><label for="exampleName" class="form-label">Add Produto:</label></div>
          <div><input type="Name" class="form-control" id="exampleName"></div>
          <button class="btn btn-primary" type="submit">+</button>
        </div>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Produto(Título)</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Disponibilidade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
<div class="d-flex justify-content-end"><button class="btn btn-primary" type="submit">Salvar</button></div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
@endsection
