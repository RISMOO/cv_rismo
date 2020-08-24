<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){
        $messages=Message::latest()->get();
        //orderBy('created_at','desc')


        return view ("about.index")->with('messages',$messages);
    }
}
