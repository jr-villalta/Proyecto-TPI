<?php

namespace App\Http\Middleware;

use App\credit_cards;
use Closure;
use Auth;

class hascard
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
        $ifcard = credit_cards::where('user_id', Auth::user()->id)->exists();

        if($ifcard){
            return $next($request);
        }
        
        return redirect()->route('setting');
        
    }
}
