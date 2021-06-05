<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login()
    {
        if ( Auth::check() )
        {
            return redirect()->route('newsPage');
        }
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/news');
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

         if ( Auth::attempt(['email' => $request->email, 'password' => $request->password]) )
         {      
              $request->session()->regenerate();

              return redirect()->route('newsPage');
         }
         else
         {
             return redirect()->back()->with('danger', 'Invalid Credentials');
         }
    }

    public function test(TestRequest $request)
    {
         
    }
}
