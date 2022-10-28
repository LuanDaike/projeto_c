@extends('layouts.layout')
@section('hortinha')
<div class="container">
  <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                  <div class="d-flex justify-content-center">
                    <h1><b>Editar Produtos</b></h1></div>
                    <form method="POST" action="{{ route('product.update', $product->id) }}"  enctype="multipart/form-data">
                        @csrf
                         @method('put')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome :') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end"><b>{{ __('Descrição :') }}</b></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$product->description}}">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price_center" class="col-md-4 col-form-label text-md-end"><b>{{ __('Preço :') }}</b></label>

                            <div class="col-md-6">
                                <input id="price_center" type="number" class="form-control" name="price_center" value="{{$product->price_center}}">

                                @error('price_center')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="it_available" class="col-md-4 col-form-label text-md-end"><b>{{ __('Disponibilidade :') }}</b></label>

                            <div class="col-md-6">
                                <input id="it_available" type="boolean" class="form-control" name="it_available" value="{{$product->it_available}}">

                                @error('it_available')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="d-flex justify-content-center" class="mb-8">
                            <div><label for="formFileSm" class="form-label"><b>Selecionar Imagem :</b></label></div>
                            <div><input class="form-control form-control-sm" id="formFileSm" name="image" type="file"></div>
                          </div>
                          <br>
                      <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">Salvar</button></div>

                    </div>
                    </div>
                    </div>
                  </div>
@endsection
