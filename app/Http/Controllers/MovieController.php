<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Movie;
use App\like;
use App\rental;
use App\shopping;
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
        $validatedData = $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:15',
            'stock' => 'required|numeric|min:10',
            'rental_price' => 'required|numeric|min:3',
            'sale_price' => 'required|numeric|min:9',
            'availability' => 'required|numeric|min:0',
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
        
        if(!Auth::check()){
            $iflike = false;
            $ifshop = false;
            $ifrental = false;
        }
        else{
            $iflike = like::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->exists();
            $ifshop = shopping::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->exists();
            $ifrental = rental::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->where('active', 1)->exists();
            $restante = "";

            if($ifrental){
                $vrental = rental::where('user_id', Auth::user()->id)->where('movie_id', $movie->id)->where('active', 1)->first();
                $tiempoRes = new DateTime();
                $diff = $vrental->created_at->diff($tiempoRes);
                $restante = $vrental->days_rented - $diff->days;
                $restante = "{$restante} days";
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
        $ifshop = shopping::where('user_id', Auth::user()->id)->where('movie_id', $id)->exists();
        
        if(!$ifshop){
            $shop = new shopping();
            $shop->user_id = Auth::user()->id;
            $shop->movie_id = $id;
            $shop->save();
        }
    }
    
    public function rentar($id){
        $ifrental = rental::where('user_id', Auth::user()->id)->where('movie_id', $id)->where('active', 1)->exists();
        
        if(!$ifrental){
            $rentl = new rental();
            $rentl->days_rented = 7;
            $rentl->active = 1;
            $rentl->user_id = Auth::user()->id;
            $rentl->movie_id = $id;
            $rentl->save();
        }
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

}
