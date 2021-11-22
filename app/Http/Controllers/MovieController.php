<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Movie;
use App\like;
use App\rental;
use App\shopping;
use App\credit_cards;
use Auth;
use DateTime;
use SebastianBergmann\Environment\Console;

class MovieController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $request->o;
        if($request->o == null)
        {
            $movies = movie::all();
        }

        if($request->o == 1)
        {
            $movies = Movie::where('availability', 1)->get();
        }

        if($request->o == 2)
        {
            $movies = Movie::where('availability', 0)->get();
        }
        
        return view('movie.index',[
            'movies' => $movies
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
        $validatedData = $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:15',
            'stock' => 'required|numeric|min:10',
            'rental_price' => 'required|numeric|min:3',
            'sale_price' => 'required|numeric|min:9',
            'availability' => 'required|numeric|min:0',
            'url' => 'required|string',
            'image' => 'required|max:20000|mimes:jpeg,bmp,png,gif,jpg'
        ]);

        $movie = new Movie();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'img/moviesfile/';
            $filename = time().'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($path,$filename);
            $movie->image = $path.$filename;
        }

        $movie->title = $validatedData['title'];
        $movie->description = $validatedData['description'];
        $movie->stock = $validatedData['stock'];
        $movie->rental_price = $validatedData['rental_price'];
        $movie->sale_price = $validatedData['sale_price'];
        $movie->availability = $validatedData['availability'];
        $movie->url = $validatedData['url'];
        $movie->likes = 0;
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
        $validatedData = $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:15',
            'stock' => 'required|numeric|min:10',
            'rental_price' => 'required|numeric|min:3',
            'sale_price' => 'required|numeric|min:9',
            'availability' => 'required|numeric|min:0',
            'url' => 'required|string'
        ]);

        $movie = Movie::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'img/moviesfile/';
            $filename = time().'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($path,$filename);
            $movie->image = $path.$filename;
        }else{
            $movie->image = $request->old_image;
        }

        $movie->title = $validatedData['title'];
        $movie->description = $validatedData['description'];
        $movie->stock = $validatedData['stock'];
        $movie->rental_price = $validatedData['rental_price'];
        $movie->sale_price = $validatedData['sale_price'];
        $movie->availability = $validatedData['availability'];
        $movie->url = $validatedData['url'];
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

    public function details(Movie $movie){
        
        $restante = 0;
        $brestante = 0;
        
        if(!Auth::check()){
            $iflike = false;
            $ifshop = false;
            $ifrental = false;
        }
        else{
            $iflike = like::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->exists();
            $ifshop = shopping::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->exists();
            $ifrental = rental::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->where('active', 1)->exists();

            if($ifrental){
                $vrental = rental::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->where('active', 1)->first();
                $tiempoRes = new DateTime();
                $diff = $vrental->created_at->diff($tiempoRes);
                $restante = $vrental->days_rented - $diff->days;
            }
        }

        return view('movie.details',[
            'movie' => $movie,
            'iflike' => $iflike,
            'ifshop' => $ifshop,
            'ifrental' => $ifrental,
            'restante' => $restante
        ]);
    }

    public function like($id){

        $iflike = like::where('user_id', Auth::user()->id)->where('movie_id', $id)->exists();

        if($iflike){

            $movie = Movie::find($id);
            $movie->likes -=1;
            $like  = like::where('user_id', Auth::user()->id)->where('movie_id', $id)->get();
            $like->each->delete();
            $movie->save();    
        
        }
        else{

            $movie = Movie::find($id);
            $movie->likes +=1;
            $like  = new like();
            $like->user_id = Auth::user()->id;
            $like->movie_id = $id;

            $like->save();
            $movie->save();
            
        }

        return redirect()->back();
    }

    public function shopping($id){

        $movie = Movie::find($id);
        $card = credit_cards::where('user_id', Auth::user()->id)->first();
        
        return view('movie.shopping',[
            'movie' =>$movie,
            'card_number' => $card->card_number
        ]);
    }
    
    public function rentar($id){

        $movie = Movie::find($id);
        $card = credit_cards::where('user_id', Auth::user()->id)->first();
        
        return view('movie.rental',[
            'movie' =>$movie,
            'card_number' => $card->card_number
        ]);

    }

    public function returnRent($id){
        
            $rentl = rental::where('user_id', Auth::user()->id)->where('movie_id', $id)->first();

            $rentl->active = 0;
            $rentl->delivery_date = new DateTime();
            $diff = $rentl->created_at->diff($rentl->delivery_date);
            $rentl->days_late = $rentl->days_rented-$diff->days;
            $rentl->penalty_fee = abs($rentl->days_late * 1);
            $rentl->save();
    }

    public function play($id){

        $movie = Movie::find($id);

        return view('movie.play',[
            'movie' =>$movie
        ]);
    }

}
