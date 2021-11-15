<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{   
    public function __construct(){
        $this->middleware('isadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('movie.index',[
            'movies' => movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        /* $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'stock' => 'required|numeric|min:1',
            'rental_prince' => 'required|numeric|min:1',
            'sale_price' => 'required|numeric|min:5',
            'availability' => 'required|numeric|min:0',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]); */

        $movie = new Movie();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'img/moviesfile/';
            $filename = time().'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($path,$filename);
            $movie->image = $path.$filename;
        }

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->stock = $request->stock;
        $movie->rental_price = $request->rental_price;
        $movie->sale_price = $request->sale_price;
        $movie->availability = $request->availability;
    
        $movie->save();
    
        return redirect('/movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movie.show',[
            'movie' =>$movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {   
        return view('movie.edit',[
            'movie' =>$movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'img/moviesfile/';
            $filename = time().'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($path,$filename);
            $movie->image = $path.$filename;
        }

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->stock = $request->stock;
        $movie->rental_price = $request->rental_price;
        $movie->sale_price = $request->sale_price;
        $movie->availability = $request->availability;

        $movie->save();

        return redirect('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movie');
    }
}
