<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_not_create_post()
    {
        // Prepare User Login
           $user = User::factory()->create();

           $credentials = [
                'email' => $user->email,
                'password' => 'password'
           ];

           $response = $this->post(route('auth.user'), $credentials);


        // Create Post
           $post = Post::factory()->create();

           $data = $post->only(['title', 'content', 'user_id', 'published']);

           Post::create($data);

           $response = $this->post(route('new-post'), $data);

           $response->assertStatus(404);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_create_post()
    {
        // Prepare User Login
           $user = User::factory()->create();
           $user->update(['type' => "1"]);

           $credentials = [
                'email' => $user->email,
                'password' => 'password'
           ];

           $response = $this->post(route('auth.user'), $credentials);


        // Create Post
           $post = Post::factory()->create();

           $data = $post->only(['title', 'content', 'user_id', 'published']);

           Post::create($data);

           $response = $this->post(route('new-post'), $data);

           $response->assertStatus(302);
    }

   /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_not_delete_post()
    {
        // Prepare User Login
           $user = User::factory()->create();

           $credentials = [
                'email' => $user->email,
                'password' => 'password'
           ];

           $this->post(route('auth.user'), $credentials);


        // Create Post
           $post = Post::factory()->create();
           $postId =  $post->id;

           $data = $post->only(['title', 'content', 'user_id', 'published']);

           Post::create($data);

           $this->post(route('new-post'), $data);

           $response = $this->get( route('del-post', ['id' => $postId]) );

           $response->assertStatus(404);
    }

   /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_delete_post()
    {
        // Prepare User Login
           $user = User::factory()->create();
           $user->update(['type' => "1"]);
           
           $credentials = [
                'email' => $user->email,
                'password' => 'password'
           ];

           $this->post(route('auth.user'), $credentials);


        // Create Post
           $post = Post::factory()->create();
           $postId =  $post->id;

           $data = $post->only(['title', 'content', 'user_id', 'published']);

           Post::create($data);

           $this->post(route('new-post'), $data);

           $response = $this->get( route('del-post', ['id' => $postId]) );

           $response->assertStatus(200);
    }

   /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_not_update_post()
    {
        // Prepare User Login
           $user = User::factory()->create();

           $credentials = [
                'email' => $user->email,
                'password' => 'password'
           ];

           $this->post(route('auth.user'), $credentials);


        // Create Post
           $post = Post::factory()->create();
           $postId =  $post->id;

           $data = $post->only(['title', 'content', 'user_id', 'published']);

           $post = Post::create($data);

           $this->post(route('new-post'), $data);

           $postData = [
               '_idpost' => $postId,
               'title' => 'Title Test Update',
               'content' => 'Content Test Update'
           ];

           $response = $this->post( route('update-post'), $postData );

           $response->assertSeeText('Not Found');
           $response->assertStatus(404);
    }

   /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_update_post()
    {
        // Prepare User Login
           $user = User::factory()->create();
           $user->update(['type' => "1"]);

           $credentials = [
                'email' => $user->email,
                'password' => 'password'
           ];

           $this->post(route('auth.user'), $credentials);


        // Create Post
           $post = Post::factory()->create();
           $postId =  $post->id;

           $data = $post->only(['title', 'content', 'user_id', 'published']);

           $post = Post::create($data);

           $this->post(route('new-post'), $data);

           $postData = [
               '_idpost' => $postId,
               'title' => 'Title Test Update',
               'content' => 'Content Test Update'
           ];

           $response = $this->post( route('update-post'), $postData );

           $response->assertStatus(200);
    }

}
