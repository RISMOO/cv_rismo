<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){


}
public function about(){

    return view ('about.about');
}



public function projets(){

    return view ('about.projets');
}



}
