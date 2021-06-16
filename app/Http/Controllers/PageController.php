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

    public function getNews($newsId)
    {
        $news = Post::findOrfail($newsId);

        if ( Auth::check() )
        {
             $user = Auth::user();

             return view('Page', compact(['news', 'user']) );
        }

        return view('News', compact(['news']) );
    }

}
