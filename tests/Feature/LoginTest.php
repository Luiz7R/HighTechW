<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Contracts\Auth\Authenticatable;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_login_using_the_login_form()
    {
        $user = User::factory()->create();
        
        $response = $this->post('/auth', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();

        $response->assertRedirect('/news');
    }

    public function test_user_can_not_access_createPostPage()
    {
        $user = User::factory()->create();
        
        $response = $this->post('/auth', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->get('/admin/posts');

        $response->assertRedirect('/news');
    } 
    
    public function test_user_can_access_createPostPage()
    {
        $user = User::factory()->create();
        
        $user->update(['type' => "1"]);

        $this->post('/auth', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('/admin/posts');
        $response->assertStatus(200);

        //$response->assertSeeText('Posts');
    } 

}
