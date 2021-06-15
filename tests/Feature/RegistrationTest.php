<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get(route('register.page'));

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $credentials = [
            'name' => 'Test User',
            'email' => 'test_user@gmail.com',
            'password' => 'password'
        ];

        $response = $this->post(route('register.user'), $credentials);

        $this->assertAuthenticated();

        $response->assertRedirect(route('newsPage'));
    }
}
