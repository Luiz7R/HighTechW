<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller
{
      
      public function adminProfile ( )
      {
            if ( Auth::check() )
            {
                 $user = Auth::user();
                 return view('admin.profile', compact(['user']));
            }
            return redirect()->route('newsPage');
      }      

      public function userProfile ( )
      {
            if ( Auth::check() )
            {
                 $user = Auth::user();
                 return view('profile', compact(['user']));
            } 
            return redirect()->route('newsPage');
      }   
}
