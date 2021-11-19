<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\credit_cards;

class CreditCardController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $card = new credit_cards();
        $card->card_owner = $request->card_owner;
        $card->card_number = $request->card_number;
        $card->MM = $request->MM;
        $card->YY = $request->YY;
        $card->CVV = $request->CVV;
        $card->user_id = Auth::user()->id;
        $card->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = credit_cards::find($id);
        $card->delete();
        return redirect()->back();
    }

}
