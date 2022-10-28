          @extends('layouts.layout')
          @section('hortinha')
          <div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-8">
                          <div class="card-body">
                            <div class="d-flex justify-content-center">
                              <h1><b>Editar Funcionários</b></h1></div>
                              <form method="POST" action="{{ route('user.update', $user->id) }}">
                                  @csrf
                                   @method('put')
                                  <div class="row mb-3">
                                      <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome') }}</b></label>

                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">

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
                                          <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">

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
                                          <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}">

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
                                          <input id="cpf" type="text" class="form-control" name="cpf" value="{{$user->cpf}}">

                                          @error('cpf')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                                      <div class="row mb-3">
                                          <label for="telefone" class="col-md-4 col-form-label text-md-end"><b>{{ __('Telefone') }}</b></label>

                                          <div class="col-md-6">
                                            <input id="telefone" type="text" class="form-control" name="phone" value="{{$user->phone}}">

                                              @error('telefone')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                     </div>

                                     <div class="row mb-3">
                                         <label for="address" class="col-md-4 col-form-label text-md-end"><b>{{ __('Endereço') }}</b></label>

                                         <div class="col-md-6">
                                           <input id="address" type="text" class="form-control" name="address" value="{{$user->address}}">

                                             @error('address')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                    </div>

                                 <div class="row mb-3">
                                   <label for="type" class="col-md-5 col-form-label text-md-end"><b>{{ __('Tipo (Gerente ou Funcionário)') }}</b></label>
                                   <div class="col-md-3">
                                     <select class="form-select" name='type' aria-label="Default select example">
                                      <option selected>Selecione</option>
                                       <option value="maneger" @if($user->type == 'maneger') 'selected' @endif>Gerente</option>
                                        <option value="employee" @if($user->type == 'employee') 'selected' @endif>Funcionário</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Salvar</button></div>

                              </div>
                              </div>
                              </div>
                            </div>
          @endsection
