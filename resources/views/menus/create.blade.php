@extends('layouts.layout')
@section('hortinha')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <h1><b>Criar Novo Cardápio</b></h1></div>
                    <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome :') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

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
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="is_active" class="col-md-4 col-form-label text-md-end"><b>{{ __('Disponibilidade :') }}</b></label>

                            <div class="col-md-6">
                                <input id="is_active" type="boolean" class="form-control" name="is_active">

                                @error('is_active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center" class="mb-3">
                          <div><label for="formFileSm" class="form-label"><b>Selecionar Imagem :</b></label></div>
                          <div><input class="form-control form-control-sm" id="formFileSm" name="image" type="file"></div>
                        </div>
                         <br>
                        <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">Criar</button></div>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection
