<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Ressource;
use App\User;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');//genere  al creation de notre AUTH
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {


        $user_id=auth()->user()->id;
        $user=User::find($user_id);

       /*->orderBy('created_at', 'desc');*/



        return view ('home')->with(['demande'=>$user->demande]);




}





    }


