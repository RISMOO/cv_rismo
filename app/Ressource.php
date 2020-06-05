<?php

namespace App;

use App\Demande;
use Illuminate\Database\Eloquent\Model;


class Ressource extends Model
{
    protected $fillable = [
        'title', 'image', 'message',
    ];

public function demande(){


      return $this->hasMany(\App\Demande::class);
}

}
