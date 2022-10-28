@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex justify-content-center">
                        <h1><b>Cadastro de Funcionários</b></h1></div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><b>{{ __('Email') }}</b></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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
                                        <strong>{{ $message }}</strong>
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
                                        <strong>{{ $message }}</strong>
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
                                            <strong>{{ $message }}</strong>
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
                                           <strong>{{ $message }}</strong>
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
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                         </div>
                      </div>



                        <div class="container-fluid">
                          <div class="d-flex justify-content-center">
                          <h1><b>Cadastro de Empresas</b></h1></div>

                        <div class="row mb-3">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-end"><b>{{ __('CNPJ') }}</b></label>

                            <div class="col-md-6">
                                <input id="cnpj" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}">

                                @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>

                       <div class="row mb-3">
                           <label for="nome_fantasia" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome Fantasia') }}</b></label>

                           <div class="col-md-6">
                               <input id="nome_fantasia" type="text" class="form-control" name="nome_fantasia" value="{{ old('nome_fantasia') }}">

                               @error('nome_fantasia')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                      </div>

                      <div class="row mb-3">
                          <label for="razao_social" class="col-md-4 col-form-label text-md-end"><b>{{ __('Razão Social') }}</b></label>

                          <div class="col-md-6">
                              <input id="razao_social" type="text" class="form-control" name="razao_social" value="{{ old('razao_social') }}">

                              @error('razao_social')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                     </div>

                     <div class="row mb-3">
                         <label for="telefone" class="col-md-4 col-form-label text-md-end"><b>{{ __('Telefone') }}</b></label>

                         <div class="col-md-6">
                             <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}">

                             @error('telefone')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                    </div>

                    <div class="row mb-3">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end"><b>{{ __('Endereço') }}</b></label>

                        <div class="col-md-6">
                            <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}">

                            @error('endereco')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                   </div>

                           <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-dark">
                                    <b>{{ __('Registre-se') }}</b>
                                </button>
                            </div>
                        </div>
                        </div>
                        </div>
                  </div>
@endsection
