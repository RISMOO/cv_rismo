<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
        //chaque demande doit etre relié a notre utilisateur
        // ici une chaque  demande appartient a un seul  utilisateur
}




public function ressource(){

    return $this->belongsTo(\App\Ressource::class);
}







}
