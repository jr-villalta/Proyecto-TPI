<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        $n = 10;

        if($request->o == null && $request->s == null){
            $movies = Movie::where('availability', 1)->orderBy('title')->paginate($n);
        }
        if($request->o != null && $request->s == null){
            $movies = $this->orderBy($request->o,$n);
        }
        if($request->o == null && $request->s != null){
            $movies = $this->searchMovies($request->s,$n);
        }

        return view('home',[
            'movies' => $movies
        ]);
    }   

    public function searchMovies(string $search, int $n){
        $movies = Movie::where('availability', 1)->orderBy('title')->title($search)->paginate($n);
        $movies->withPath('/?s='.$search);
        return $movies;
    }

    public function orderBy(string $request, int $n){

        if($request == 'title'){
            $movies = Movie::where('availability', 1)->orderBy($request)->paginate($n);
        }
        if($request == 'likes'){
            $movies = Movie::where('availability', 1)->orderBy($request,'DESC')->paginate($n);
        }
        else{
            $movies = Movie::where('availability', 1)->orderBy('title')->paginate($n);
        }

        $movies->withPath('/?o='.$request);
        return $movies;
    }
}

