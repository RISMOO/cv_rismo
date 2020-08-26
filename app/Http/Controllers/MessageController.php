<?php
namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'nom'=>'alpha|between:3,20|required',
            'email'=>'email|required',
            'message'=>'between:3,255|required',
            'fonction'=>'between:3,50|required',
            'photo'=>'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'


        ]);

        $message=new Message;
        $message->nom=trim($request->input('nom'));
        $message->email=$request->input('email');
        $message->message=$request->input('message');
        $message->fonction=$request->input('fonction');
        $path = $request->file('photo')->store('public/photos');
        $nameFile = explode("/", $path)[2];
        $message->photo= "/storage/photos/" . $nameFile;
        //image upload///
        // dd(Storage::url($message->photo));
/* Exemple explode
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
*/


        $message->save();
        return redirect('/') ->with('success', " Votre message a été envoyé et publié !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
