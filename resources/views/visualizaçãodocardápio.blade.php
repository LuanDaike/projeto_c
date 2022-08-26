@extends('layouts.layout')
@section('hortinha')
  <div class="d-flex justify-content-center gap-2"><h1>Visualização Do Cardápio</h1></div>
  <b>Nome:</b> Cardápio Principal
  <p>Criado em: 14/06/2022</p>
  <p>Cardápio Ativo? sim</p>
  <div class="d-flex justify-content-center gap-2"><p>Ativar/Desativar</p><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked"></label></div>
  <div class="d-inline-flex gap-2">
  <div><label for="exampleName" class="form-label">Add Produtos:</label></div>
  <div><input type="Name" class="form-control" id="exampleName"></div>
  <button class="btn btn-primary" type="submit">+</button></div>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Prouto (Título)</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Disponibilidade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Batata Frita com bacon</td>
      <td>Porção de batata frita com bacon (200g)</td>
      <td>R$12,00</td>
      <td>Disponível</td>
    </tr>
    <tr>
      <td>Espetinho de carne</td>
      <td>Espetinho de carne bovina (100g)</td>
      <td>R$10,00</td>
      <td>Disponível</td>
    </tr>
    <tr>
      <td>Pizza de bacon com frango</td>
      <td>Pizza de bacon com frango com tomate 8 pedaços</td>
      <td>R$36,00</td>
      <td>Disponível</td>
    </tr>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
@endsection
