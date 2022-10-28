<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_show_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200)
             ->assertSeeText('Login');
    }
}
