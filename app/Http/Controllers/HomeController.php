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
        $n = 2;

        if($request->s == null && $request->o == null){
            $movies = Movie::where('availability', 1)->orderBy('title')->paginate($n);
            $movies->withPath('/?o=&s=');
        }else{
            if($request->s == null && $request->o != null){
                $orderby = $request->get('o');
                if($orderby == 'title'){
                    $movies = Movie::where('availability', 1)->orderBy($orderby)->paginate($n);
                }
                else{
                    $movies = Movie::where('availability', 1)->orderBy($orderby,'DESC')->paginate($n);
                }
                $movies->withPath('/?o='.$orderby.'&s=');
            }
            if($request->s != null && $request->o == null){
                $search = $request->get('s');
                $movies = Movie::where('availability', 1)->orderBy('title')->title($search)->paginate($n);
                $movies->withPath('/?o=&s='.$search);
            }
            if($request->s != null && $request->o != null){
                $orderby = $request->get('o');
                $search = $request->get('s');
                if($orderby == 'title'){
                    $movies = Movie::where('availability', 1)->orderBy($orderby)->paginate(1);
                }
                else{
                    $movies = Movie::where('availability', 1)->orderBy($orderby,'DESC')->paginate($n);
                }
                $movies->withPath('/?o='.$orderby.'&s='.$search);
            }
        }
        return view('home',[
            'movies' => $movies
        ]);
    }   
}
