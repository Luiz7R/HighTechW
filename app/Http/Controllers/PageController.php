<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getNewsPage()
    {
        $news = Post::paginate(10);

        if ( Auth::check() )
        {
             $user = Auth::user();

             return view('Page', compact(['news', 'user']) );
        }

        return view('Page', compact(['news']) );
    }

    public function getLoginPage()
    {
        return view('Login');
    }

}
