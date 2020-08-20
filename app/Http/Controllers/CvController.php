<?php

namespace App\Http\Controllers;


use App\Stage;
use App\Formation;
use App\Framework;
use App\Transport;
use App\Competence;
use App\Experience;
use App\Utilitaire;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index (){
     $competences=Competence::all();
     $utilitaires=Utilitaire::all();
     $frameworks=Framework::all();
     $experiences=Experience::all();
     $transports=Transport::all();
     $formations=Formation::all();
     $stages=Stage::all();

        return view ('cv.index')->with(['competences'=>$competences,
        'utilitaires'=>$utilitaires,
        'frameworks'=>$frameworks,
        'experiences'=>$experiences,
        'transports'=>$transports,
        'formations'=>$formations,
        'stages'=>$stages

        ]);

    }


    public function experiences (){

        return view ('cv.experiences');
    }

    public function loisirs(){

        return view ('cv.loisirs');
    }
    public function formations(){

        return view ('cv.formations');
    }


}
