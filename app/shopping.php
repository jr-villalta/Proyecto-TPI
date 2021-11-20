<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopping extends Model
{
    public function compra(){
        return $this->belongsTo(User::class);
    }

    // protected $table = "users"; para que el modelo use otra tabla que no le corresponde o no encuentre
}
