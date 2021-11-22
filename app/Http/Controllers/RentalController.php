<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rental;
use App\Movie;
use Auth;
use DateTime;

class RentalController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = rental::all();

        return view('rental.index',[
            'rentals' => $rentals 
        ]);
    }

    public function indexbyuser($id)
    {
        $rentals = rental::where('user_id', $id)->get();

        return view('rental.indexbyuser',[
            'rentals' => $rentals 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $ifhaverental = rental::where('user_id', Auth::user()->id)->where('active', 1)->exists();

        if(!$ifhaverental){
            $ifrental = rental::where('user_id', Auth::user()->id)->where('movie_id', $request->movie_id)->where('active', 1)->exists();
            
            if(!$ifrental){
    
                $movie = Movie::where('id',$request->movie_id)->first();
                $movie->stock -= 1;
                if($movie->stock == 0){
                    $movie->availability = 0;
                }
    
                $rentl = new rental();
                $rentl->title = $request->movie_title.'-'.str_replace(" ", "-", Auth::user()->name);
                $rentl->active = 1;
                $rentl->days_rented = 7;
                $rentl->days_late = 0;
                $rentl->penalty_fee = 0;
                $rentl->estimated_delivery_date = date("Y-m-d H:i:s",strtotime($rentl->created_at."+{$rentl->days_rented} days"));
                $rentl->user_id = Auth::user()->id;
                $rentl->movie_id = $request->movie_id;
                $rentl->rental_price = $request->total; 
                $rentl->total = $rentl->penalty_fee+$request->total;
                $rentl->save();
                $movie->save();
            }
        }

        return redirect('/movie/details/'.$request->movie_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $rentl = rental::find($id);

        return view('rental.show',[
            'rentl' =>$rentl
        ]);
    }

    public static function returnRentedMovie($id){

        $rentl = rental::where('user_id', Auth::user()->id)->where('movie_id', $id)->where('active', 1)->first(); 
        $movie = Movie::find($rentl->movie_id);
        $movie->stock += 1;
        if($movie->stock > 0 && $movie->availability == 0){
            $movie->availability = 1;
        }
 
        $rentl->active = 0; 
        $rentl->delivery_date = new DateTime(); 
        $diff = $rentl->created_at->diff($rentl->delivery_date);

        $rentl->days_late = $rentl->days_rented-$diff->days; 
        
        if($rentl->days_late < 0){
            $rentl->penalty_fee = abs($rentl->days_late * 1); 
        }
        else{
            $rentl->penalty_fee = 0; 
        }
        
        $rentl->total = $rentl->penalty_fee+$rentl->rental_price;
        $rentl->save();
        $movie->save();

        return $rentl;

    }
}

/*          $rentl = rental::where('user_id', Auth::user()->id)->where('movie_id', $id)->where('active', 1)->first();

            $movie = Movie::find($rentl->movie_id);
            $movie->stock += 1;
            if($movie->stock > 0 && $movie->availability == 0){
                $movie->availability = 1;
            }
    
            $rentl->active = 0;
            $rentl->delivery_date = new DateTime();
            $diff = $rentl->created_at->diff($rentl->estimated_delivery_date);
            
            if($diff->invert == 1){
                $rentl->days_late = $diff->days;
                $rentl->penalty_fee = $rentl->days_late * 1;
            }
            else{
                $rentl->days_late = 0;
                $rentl->penalty_fee = $rentl->days_late * 1;
            }
    
            $rentl->total = $rentl->penalty_fee+$rentl->rental_price;
    
            dd($rentl,$diff);
            $rentl->save();
            $movie->save();
     */