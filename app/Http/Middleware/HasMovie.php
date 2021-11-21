<?php

namespace App\Http\Middleware;

use App\rental;
use Illuminate\Http\Request;
use Closure;
use Auth;
use App\shopping;

class HasMovie
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
        $movie_id = end($arrUri);

        $hasmovie = shopping::where('user_id', Auth::user()->id)->where('movie_id', $movie_id)->exists();
        if ($hasmovie) {
            return $next($request);
        }
        $hasmovie = rental::where('user_id', Auth::user()->id)->where('movie_id', $movie_id)->where('active', 1)->exists();
        if ($hasmovie) {
            return $next($request);
        }

        return redirect('/movie/details/'.$movie_id);
    }
}
