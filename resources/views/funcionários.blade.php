@extends('layouts.layout')
@section('hortinha')
  <div class="container-fluid">
    <h1>Funcionários</h1>
    <div class="d-flex justify-content-start"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MeuModal">Criar Novo</button></div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">Login</th>
          <th scope="col">Editar</th>
          <th scope="col">Remover</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Anderson Silva</td>
          <td>02334578</td>
          <td>Rua Marechal</td>
          <td>429113456</td>
          <td>anderson@gmail.com</td>
          <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
          <td><button class="btn btn-danger" type="submit">🗑️</button></td>
        </tr>
        <tr>
          <td>Lurdes da Silva</td>
          <td>07354589</td>
          <td>Rua das Flores</td>
          <td>42988253</td>
          <td>lurdes@gmail.com</td>
          <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
          <td><button class="btn btn-danger" type="submit">🗑️</button></td>
        </tr>
        <tr>
          <td>.</td>
          <td>.</td>
          <td>.</td>
          <td>.</td>
          <td>.</td>
          <td>.</td>
          <td>.</td>
        </tr>
      </tbody>
    </table>
    <div class="modal fade" id="MeuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Funcionário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-inline-flex gap-2">
              <div><label for="exampleName" class="form-label">Nome:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
            </div>
            <div class="d-inline-flex gap-2">
              <div><label for="exampleName" class="form-label">CPF:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
            </div>
            <br>
            <br>
            <div class="d-inline-flex gap-2">
              <div><label for="exampleName" class="form-label">Telefone:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
            </div>
            <div class="d-inline-flex gap-2">
              <div><label for="exampleName" class="form-label">CEP:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
            </div>
            <br>
            <br>
            <div class="d-inline-flex gap-2">
              <div><label for="exampleName" class="form-label">Rua:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
              <div><label for="exampleName" class="form-label">Cidade:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
                <label for="inputState" class="form-label">UF</label>
                <select id="inputState" class="form-select">
                  <option selected>Escolha...</option>
                </select>
              </div>
            </div>
            <div class="modal-body">
              <div class="d-inline-flex gap-2">
                <div><label for="exampleName" class="form-label">Nome:</label></div>
                <div><input type="Name" class="form-control" id="exampleName"></div>
              </div>
              <div class="d-inline-flex gap-2">
                <div><label for="exampleName" class="form-label">Senha:</label></div>
                <div><input type="Name" class="form-control" id="exampleName"></div>
              </div>
              <div class="d-flex justify-content-end"><button class="btn btn-primary" type="submit">Salvar</button></div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

@endsection
