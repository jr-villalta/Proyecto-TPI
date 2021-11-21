<?php

namespace App\Http\Middleware;
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
        $movie_id = $arrUri[3];

        $hasmovie = shopping::where('user_id', Auth::user()->id)->where('movie_id', $movie_id)->exists();
        if ($hasmovie) {
            return $next($request);
        }

        return redirect('/movie/details/'.$movie_id);
    }
}
