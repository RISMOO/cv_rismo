<?php

namespace App\Http\Controllers;

use App\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo(){
        $demonstration="DEMO";
        $demos = Demo::all();

        return view ('Demo')->with(['demos'=> $demos,'demonstration'=>$demonstration]);
    }
}
