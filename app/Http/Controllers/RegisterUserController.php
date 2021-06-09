<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RegisterUserController extends Controller
{

       public function createPage()
       {
              return view('admin.register');
       }

       public function createAccount (Request $request)
       {
              $request->validate([
                    'email' => 'required|string|email|max:100|unique:users',
                    'password' => 'required', 'confirmed', Rules\Password::defaults(),
              ]);

              $user = User::create([
                  'name' => $request->name,
                  'email' => $request->email,  
                  'email_verified_at' => Carbon::now(),
                  'password' => Hash::make($request->password),
                  'remember_token' => Str::random(10),
              ]);

              Auth::login($user);

              return redirect()->route('newsPage');
       }
}
