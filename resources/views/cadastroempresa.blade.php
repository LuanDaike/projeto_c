@extends('layouts.layout')
@section('hortinha')
<div class="container">
    <br>
    <h1>CADASTRO DE EMPRESA</h1>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputCNPJ" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="inputCNPJ">
      </div>
      <div class="col-md-6">
        <label for="inputSocial" class="form-label">Razão Social</label>
        <input type="text" class="form-control" id="inputSocial">
      </div>
      <div class="col-md-6">
        <label for="inputName" class="form-label">Nome Fantasia</label>
        <input type="text" class="form-control" id="inputName">
      </div>
      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="inputPhone">
      </div>
      <div class="col-md-12">
        <label for="inputName" class="form-label">Gerente Responsável</label>
        <input type="text" class="form-control" id="inputName">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha...</option>
          <option>Paraná</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">CEP</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Lembre-me
          </label>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

@endsection
