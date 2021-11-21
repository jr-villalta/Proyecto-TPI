<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\credit_cards;
use Auth;
class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index',[
            'users' => User::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show',[
            'user' =>$user
        ]);
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

    public function setting(){

        $user = User::find(Auth::user()->id); 
        
        $card_id = 0;
        $card_number = "";
        $cardexists = credit_cards::where('user_id', Auth::user()->id)->exists();
        if($cardexists){
            $card = credit_cards::where('user_id', Auth::user()->id)->first();
            $card_id = $card->id;
            $card_number = $card->card_number;
        }
        else{
        }

        return view('user.setting',[
            'user' => $user,
            'cardexists' => $cardexists,
            'card_id' => $card_id,
            'card_number' => $card_number
        ]);
    }

    public function roleUpdate($id){

        $user = User::find($id);

        if($user->is_admin == 1){
            $user->is_admin = 0;
        }
        else{
            $user->is_admin = 1;
        }

        $user->save();
        return redirect()->back();
    }
}
