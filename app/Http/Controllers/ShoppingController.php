<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shopping;
use Auth;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexbyuser($id)
    {
        $shoppings = shopping::where('user_id', $id)->get();

        return view('shopping.indexbyuser',[
            'shoppings' => $shoppings 
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

        $ifshop = shopping::where('user_id', Auth::user()->id)->where('movie_id', $request->movie_id)->exists();
        
        if(!$ifshop){
            $shop = new shopping();
            $shop->title = $request->movie_title.'-'.str_replace(" ", "-", Auth::user()->name);
            $shop->total = $request->total;
            $shop->user_id = Auth::user()->id;
            $shop->movie_id = $request->movie_id;
            $shop->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
