@extends('layouts.layout')
@section('hortinha')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <h1><b>Criar Novo Funcionário</b></h1></div>
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome') }}</b></label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-end"><b>{{ __('Email') }}</b></label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><b>{{ __('Senha') }}</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><b>{{ __('Confirme a senha') }}</b></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end"><b>{{ __('CPF') }}</b></label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}">

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end"><b>{{ __('Telefone') }}</b></label>

                                <div class="col-md-6">
                                  <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Preencha esse campo.</strong>
                                        </span>
                                    @enderror
                                </div>
                           </div>

                           <div class="row mb-3">
                               <label for="address" class="col-md-4 col-form-label text-md-end"><b>{{ __('Endereço') }}</b></label>

                               <div class="col-md-6">
                                 <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                                   @error('address')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>Preencha esse campo.</strong>
                                       </span>
                                   @enderror
                               </div>
                          </div>

                          <div class="row mb-3">
                              <label for="type" class="col-md-4 col-form-label text-md-end"><b>{{ __('Tipo (Gerente ou Funcionário)') }}</b></label>

                              <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}">

                                  @error('type')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>Preencha esse campo.</strong>
                                      </span>
                                  @enderror
                              </div>
                         </div>
                        <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">Criar</button></div>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection
