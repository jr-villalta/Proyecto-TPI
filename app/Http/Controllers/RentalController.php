<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rental;
use App\Movie;
use Auth;

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

        return redirect('/movie/details/'.$request->movie_id);

    }
}
