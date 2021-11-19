<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rental extends Model
{
    public function renta(){
        return $this->belongsTo(User::class);
    }
}
