<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Ishe
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
        $arrUri = explode('/',$request->getRequestUri());
        $user_id = end($arrUri);
        
        if (is_numeric($user_id) && $user_id == Auth::user()->id) {
            return $next($request);
        }

        return redirect('/home');
    }
}
