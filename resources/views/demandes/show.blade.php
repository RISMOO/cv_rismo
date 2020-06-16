@extends('layouts.app')
@section('content')
<h6 class="text-right"><a href="/home/"><i class="fa fa-angle-left" style="font-size:20px"></i>&nbsp; Retour</a></h6>
<div class="card-body">
     <a class="mt-1 "><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}"></a><br>
         <h4 class="text-primary text-center"> Votre demande<hr>
  <div class=container>

    <div class=container>
        <div class="card-body mb-4 mt-2">
        <div class="row vdivide">

            <div class="col-sm-3 text-center"><h5 class="text-light">Nom du lab</h5><hr>
                <h6 class="text-primary font-weight-bolder  " style="font-size:20px" style="font-size:18px">{{$demande->Labs}}<span></h6>
            </div>

            <div class="col-sm-3 text-center"><h5 class="text-light">Ressource</h5><hr>
             <h6 class="text-primary font-weight-bolder " style="font-size:20px" style="font-size:18px">{{$demande->ressource['title']}}<span></h6>

            </div>
            <div class="col-sm-3 text-center"><h5 class="text-light">Date debut</h5><hr>
                <h6 class="text-primary font-weight-bolder  " style="font-size:20px" style="font-size:18px">{{$demande->Date_de_debut}}<span></h6>

               </div>
               <div class="col-sm-3 text-center"><h5 class="text-light">Date fin</h5><hr>
                <h6 class="text-primary font-weight-bolder " style="font-size:20px" style="font-size:18px">{{$demande->Date_de_fin}}<span></h6>

               </div>
        </div>
        </div>








                  <h6><strong class="mr-auto"><a href="/demande/{{$demande->id}}/edit" class="border btn btn-secondary btn-block">Modifier votre demande</a></strong></h6>
                   <h5>{!! Form::open(['action'=>['DemandeController@destroy',$demande->id],'method'=>'POST']) !!}
                       {{ Form::hidden('_method','DELETE')}}
                       {{ Form::submit('SUPPRIMER VOTRE DEMANDE',['class'=>' border mb-3  btn btn-secondary btn-block'] )}}
                      {!! Form::close() !!}
                   </h5>
             </div>

@endsection

