<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public function compra(){
        return $this->belongsTo(User::class);
    }
}
