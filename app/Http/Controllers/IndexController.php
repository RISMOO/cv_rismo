<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){
        $messages=Message::orderBy('created_at','desc')
        ->paginate(2);
        return view ("about.index")->with('messages',$messages);
    }
}
