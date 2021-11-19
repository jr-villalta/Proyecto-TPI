<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopping extends Model
{
    public function compra(){
        return $this->belongsTo(User::class);
    }
}
