<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostBlogRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getPosts()
    {
        $users = User::all();
        $posts = Post::paginate(3);

        return view('managePosts', compact(['posts', 'users']));
    }

    public function postBlogPost(PostBlogRequest $request)
    {        
        $data = $request->only(['title', 'content', 'user_id']);
        $data['published'] = $request->has('published');
        
        Post::create($data);

        return redirect('/posts');
    }

    public function getPost(Post $post)
    {
        return response()->json($post);
    }

    function deletePost($id)
    {
        $data = Post::find($id);
        $data->delete();
        return true; //return redirect('/posts');
    }

    function editPost($id)
    {
        $post = Post::find($id);
        
        return $post;
    }

    function update(Request $request)
    {
        //return $request->input(); // Retornar valores enviados
        $postData = Post::find($request->_idpost);
        
        $postData->title = $request->title;
        $postData->content = $request->content;
        $postData->save();

        return true;
    }
}
