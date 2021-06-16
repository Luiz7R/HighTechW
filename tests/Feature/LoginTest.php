<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get(route('login.page'));

        $response->assertViewIs('login');
        $response->assertStatus(200);
    }

    public function test_client_can_not_see_login_screen()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('login.page'));

        $response->assertRedirect(route('newsPage'));
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_login_using_the_login_form()
    {
        $user = User::factory()->create();
        
        $credentials = [
            'email' => $user->email,
            'password' => 'password'
        ];

        $response = $this->post(route('auth.user'), $credentials);

        //$this->assertAuthenticated();

        $response->assertRedirect(route('newsPage'));
    }

    public function test_user_can_not_login_using_the_login_form()
    {
        $user = User::factory()->create();
        
        $credentials = [
            'email' => $user->email,
            'password' => 'wrong'
        ];

        $response = $this->post(route('auth.user'), $credentials);

        $response->assertStatus(302);
    }


    public function test_user_can_logout()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('logout.user'));

        $response->assertRedirect(route('newsPage'));
    }

    public function test_user_can_not_access_createPostPage()
    {
        $user = User::factory()->create();        

        $credentials = [
            'email' => $user->email,
            'password' => 'password'
        ];

        $this->post(route('auth.user'), $credentials);

        $response = $this->get(route('posts.page'));
        $response->assertStatus(404);
    } 
    
    public function test_user_can_access_createPostPage()
    {
        $user = User::factory()->create();        
        $user->update(['type' => "1"]);

        $credentials = [
            'email' => $user->email,
            'password' => 'password'
        ];

        $this->post(route('auth.user'), $credentials);

        $response = $this->get(route('posts.page'));
        $response->assertStatus(200);
    } 

}
