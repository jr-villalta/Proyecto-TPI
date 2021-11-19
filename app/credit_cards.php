<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credit_cards extends Model
{
    public function cards(){
        return $this->belongsTo(User::class);
    }
}
