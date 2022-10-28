<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_shouldnt_register_user_when_invalid_form()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
          ->assertInvalid(['name', 'email', 'password']);
    }

    public function test_should_register_user_when_valid_data()
    {
      $response = $this->post('/register', [
        'name' => 'luan',
        'email' => 'luan@gmail.com',
        'password' => 'luan2005du5',
        'password_confirmation' => 'luan2005du5',
        'razao_social' => 'luan coffee',
        'nome_fantasia' => 'laun coffee',
        'address' => 'lá',
        'phone' => '4299505692',
        'cnpj' => '12345678912345',
        'endereco' => 'bem alí',
        'telefone' => '4295728135',
        'type' => 'maneger'
      ]);

      $response->assertRedirect()
       ->assertSessionHasNoErrors();

       $this->assertDatabaseHas('users', ['email' => 'luan@gmail.com']);

       $this->assertDatabaseHas('establishments', ['cnpj' => '12345678912345']);
    }
}
