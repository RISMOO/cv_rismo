<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Ressource;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{


    public function list()

    {
  
  return Demande::all();
    }
}
