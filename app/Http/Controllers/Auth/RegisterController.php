<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Establishment;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'min:11', 'unique:users'],
            'phone' => ['required', 'string', 'min:10'],
            'type' => ['required', 'string', 'max:255'],
            'cnpj' => ['required', 'string', 'min:14', 'unique:establishments'],
            'endereco' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string', 'min:10'],
            'nome_fantasia' => ['required', 'string', 'max:255'],
            'razao_social' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
      $establishment = Establishment::create([
        'cnpj' => $data['cnpj'],
        'nome_fantasia' => $data['nome_fantasia'],
        'razao_social' => $data['razao_social'],
        'endereco' => $data['endereco'],
        'telefone' => $data['telefone'],

      ]);

        return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'phone' => $data['phone'],
            'type' => $data['type'],
            'email' => $data['email'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'establishment_id' => $establishment->id,

        ]);
    }
}
