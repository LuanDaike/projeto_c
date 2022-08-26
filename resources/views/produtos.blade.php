@extends('layouts.layout')
@section('hortinha')

  <div class="container-fluid">
    <h1>Produtos</h1>
    <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MeuModal">Criar Novo</button></div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
          <th scope="col">Disponibilidade</th>
          <th scope="col">Visualizar</th>
          <th scope="col">Editar</th>
          <th scope="col">Remover</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Fritas com bacon</td>
          <td>Porção de batata frita com bacon (200g)</td>
          <td>R$12,00</td>
          <td>Disponível</td>
          <td><a class="btn btn-warning" href="" role="button">👀</a></td>
          <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
          <td><button class="btn btn-danger" type="submit">🗑️</button></td>
        </tr>
        <tr>
          <td>Espetinho</td>
          <td>Espetinho de carne bovina (100g)</td>
          <td>R$10,00</td>
          <td>Disponível</td>
          <td><a class="btn btn-warning" href="" role="button">👀</a></td>
          <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
          <td><button class="btn btn-danger" type="submit">🗑️</button></td>
        </tr>
        <tr>
          <td>Pizza com frango e bacon</td>
          <td>Pizza de bacon com frango com tomate 8 pedaços</td>
          <td>R$36,00</td>
          <td>Disponível</td>
          <td><a class="btn btn-warning" href="" role="button">👀</a></td>
          <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
          <td><button class="btn btn-danger" type="submit">🗑️</button></td>
        </tr>
        <tr>
          <td>Coca-Cola</td>
          <td>Refrigerante Coca-Cola 500ml</td>
          <td>R$12,00</td>
          <td>Disponível</td>
          <td><a class="btn btn-warning" href="" role="button">👀</a></td>
          <td><a class="btn btn-primary" href="" role="button">✏️</a></td>
          <td><button class="btn btn-danger" type="submit">🗑️</button></td>
        </tr>
      </tbody>
    </table>
    <div class="modal fade" id="MeuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" class="container-fluid">
            <div class="d-inline-flex gap-2">
              <div><label for="exampleName" class="form-label">Nome:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
              <div><label for="exampleName" class="form-label">Preço:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
            </div>
            <br>
            <br>
            <div class="d-inline-flex gap-5">
              <div><label for="exampleName" class="form-label">Descrição:</label></div>
              <div><input type="Name" class="form-control" id="exampleName"></div>
              <div><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div>
              <div><label class="form-check-label" for="flexSwitchCheckChecked">Disponível</label></div>
            </div>
            <br>
            <br>
            <div class="d-inline-flex gap-2">
              <div><label for="formFile" class="form-label">Imagem:</label></div>
              <div><input class="form-control" type="file" id="formFile"></div>
            </div>
            <div class="d-flex justify-content-end"><button class="btn btn-primary" type="submit">Criar</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
@endsection
