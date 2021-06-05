<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller
{

      /**
       * Handle an authentication attempt.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */

      public function keep (LogRequest $request)
      {

            $request->authenticate();

            $request->session()->regenerate();

            return redirect()->route('admprf');
      }

      public function admLog ( )
      {
            if ( Auth::check() )
            {
                  return redirect()->route('admprf');
            }
            return view('admin.login');
      } 
      
      public function adminProfile ( )
      {
            $user = Auth::user();
            return view('admin.profile', compact(['user']));
      }      

      public function userProfile ( )
      {
            $user = Auth::user();
            return view('profile', compact(['user']));
      }   
}
