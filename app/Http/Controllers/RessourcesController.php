<?php

namespace App\Http\Controllers;

use App\Ressource;
use Illuminate\Http\Request;

class RessourcesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $ressources= Ressource::orderBy('created_at','desc')

     ->paginate(6);

     $catalogue="Catalogue/Ressources";


    return view('catalogue.Ressource')->with(['ressources'=> $ressources,'catalogue'=>$catalogue]);
    }

    public function login()
    {
    return view('auth.login');
    }





    public function show($slug){



        $ressources= Ressource::whereSlug($slug)->first();//une seul instance

        $ressources->nb_visite++;


          $ressources->save();

        return view('catalogue.Show')->with('ressources',$ressources);
    }


    }








