<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class authUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if ( Auth::check() )
        {
            $user = Auth::user();

            if ( $user->type == 0 )
            {
                abort(404); //return redirect('/news');
            }
        }    
        return $next($request);
    }
}