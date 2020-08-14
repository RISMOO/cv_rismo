<?php

namespace App\Http\Controllers;

use App\Competence;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function competences (){

        $competence = Competence::all();
        return view ('cv.competences')->with('competence',$competence);

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
