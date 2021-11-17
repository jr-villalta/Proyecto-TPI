<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Movie extends Model
{

    public function users(){
        return $this->belongsTo(User::class);
    }

    //Scope
    public function scopeTitle($query,$title){

        if($title){
            return $query->where('title','LIKE',"%$title%"); //cualquier palabra semejante
        }
        //sis% todo lo que comience con 'sis', %tema todo lo que termine con 'tema', 
        //%te% todo lo que incluya 'te'
    }
    
}
