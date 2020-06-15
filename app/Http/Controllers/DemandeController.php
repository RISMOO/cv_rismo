<?php

namespace App\Http\Controllers;

use App\Demande;

use App\Ressource;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DemandeController extends Controller
{

    public function __construct()// tous nos utilisateurs qui feront une demande doivent etre identifié
    {
      $this->middleware('auth');


      //on rajoute une exception ,les vues que l'utilistaeur pourra voir

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $demande = Demande::all();

        return view ('All')->with('demande', $demande);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ressources = Ressource::all();//avant le pluck on nous renvoyé un tableau indexé
        $ressources_rebuild = array();
        foreach($ressources as $ressource):
            $ressources_rebuild[$ressource['id']] = $ressource['title'];//transformé en tableau associatif
        endforeach;





        return view ('demandes.create')->with(['ressources'=> $ressources_rebuild]);



    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)/*pour notre mise a jour on copie la fonctioN
    store et on la met dans la fonction update */
    {


            $this->validate($request,[

                'Labs'=>'required|alpha|between:3,20',
                'Date_de_debut'=>'required|date|after:now',
                'Date_de_fin'=>'required|date|after:Date_de_debut',
                 'ressources'=>'required'


            ]);

            date_default_timezone_set('Europe/Paris');

            $demande=new Demande;
            $demande->Labs=trim($request->input('Labs'));
            $demande->ressource_id=$request->input('ressources');
            $demande->Date_de_debut=$request->input('Date_de_debut');
            $demande->Date_de_fin=$request->input('Date_de_fin');
            $demande->user_name=auth()->user()->name;
            $demande->user_email=auth()->user()->email;
            $demande->created_at=time();


            $demande->user_id=auth()->user()->id;// grace a la fonction auth on recupere l'id et l'utilisateur
            $demande->save();

            return redirect('/home') ->with('success', "votre demande a été envoyé !");
/*



*/
 } /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)// notre fonction show nous la copions dans la fonction edit

    {
    $demande=Demande::find($id);

    $demande->nb_demande++;
    $demande->save();
    $ressource=Ressource::find($id);


    return view ('demandes.show') ->with(['demande'=>$demande,'ressource'=> $ressource ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


            $demande=Demande::find($id);
            $ressources = Ressource::all();//avant le pluck on nous renvoyé un tableau indexé
            $ressources_rebuild = array();

            foreach($ressources as $ressource):
                $ressources_rebuild[$ressource['id']] = $ressource['title'];//transformé en tableau associatif
            endforeach;




            return view ('demandes.edit') ->with (['ressources' => $ressources_rebuild,'demande' => $demande ]);



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

        $this->validate($request,[
            'Labs'=>'required|alpha|between:3,20',
            'Date_de_debut'=>'required|date|after:now',
            'Date_de_fin'=>'required|after:Date_de_debut',
            'ressource'=>'required'

        ]);

        $demande=Demande::find($id);//on va chercher la demande que l'on veut modifier
        $demande->ressource_id=$request->input('ressource');
        $demande->Labs=trim($request->input('Labs'));
        $demande->Date_de_debut=$request->input('Date_de_debut');
        $demande->Date_de_fin=$request->input('Date_de_fin');
        $demande->save();

        return redirect('/home')
        ->with  ('success', "Votre demande a bien été modifié !");





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $demande=Demande::find($id);//on recupere lid de la demande
      $demande->delete();//on supprime la demande
      return redirect('/home')
      ->with('success', "Votre demande a bien été supprimé !");
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_from($id)
    {
        $ressources = Ressource::All();//avant le pluck on nous renvoyé un tableau indexé
        $ressources_rebuild = array();
        foreach($ressources as $ressource):
            $ressources_rebuild[$ressource['id']] = $ressource['title'];//transformé en tableau associatif
        endforeach;
        $ressource_selected = strip_tags($id);//retourne une chaine str apres avoir supprimé tous les balises php et html
//dd($ressource_selected);




        return view ('demandes.create')->with(['success','Votre ressources a été selectionné','ressources'=> $ressources_rebuild,'ressource_selected'=> $ressource_selected ]);






    }
}
