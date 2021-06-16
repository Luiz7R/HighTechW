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

    public function test_client_can_register()
    {
        $credentials = [
            'name' => 'Test User',
            'email' => 'test_user@gmail.com',
            'password' => 'password'
        ];

        $response = $this->post(route('register.user'), $credentials);

        $this->assertDatabaseHas('users', [
            'email' => $credentials["email"]
        ]);

        $this->assertAuthenticated();

        $response->assertRedirect(route('newsPage'));
    }

    public function test_client_can_not_register()
    {   
        $user = User::factory()->create();

        $credentials = [
            'name' => 'Test User',
            'email' => $user->email,
            'password' => 'password'
        ];

        $response = $this->post(route('register.user'), $credentials);

        $response->assertStatus(302);
    }    
}
