@extends('layouts.app')
@section('content')
<h6 class="text-right"><a href="/home/"><i class="fa fa-angle-left" style="font-size:20px"></i>&nbsp; Retour</a></h6>
<div class="card-body">
     <a class="mt-1 "><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}" alt="IMT"></a><br>
         <h4 class="text-primary text-center"> Votre demande</h4><hr>


    <div class=container>
        <div class="card-body mb-4 mt-2">
        <div class="row vdivide">

            <div class="col-sm-3 text-center"><h5 class="text-light">Nom du lab</h5><hr>
                <h6 class="text-primary font-weight-bolder" style="font-size:20px">{{$demande->Labs}}</h6>
            </div>

            <div class="col-sm-3 text-center"><h5 class="text-light">Ressource</h5><hr>
             <h6 class="text-primary font-weight-bolder " style="font-size:20px">{{$demande->ressource['title']}}</h6>

            </div>
            <div class="col-sm-3 text-center"><h5 class="text-light">Date debut</h5><hr>
                <h6 class="text-primary font-weight-bolder" style="font-size:20px">{{$demande->Date_de_debut}}</h6>

               </div>
               <div class="col-sm-3 text-center"><h5 class="text-light">Date fin</h5><hr>
                <h6 class="text-primary font-weight-bolder " style="font-size:20px">{{$demande->Date_de_fin}}</h6>

               </div>
        </div>
        </div>








                  <h6><strong class="mr-auto"><a href="/demande/{{$demande->id}}/edit" class="border btn btn-secondary btn-block">Modifier votre demande</a></strong></h6>
                   {!! Form::open(['action'=>['DemandeController@destroy',$demande->id],'method'=>'POST']) !!}
                       {{ Form::hidden('_method','DELETE')}}
                      <h6>{{ Form::submit('SUPPRIMER VOTRE DEMANDE',['class'=>' border mb-3  btn btn-secondary btn-block'] )}}</h6>
                      {!! Form::close() !!}

             </div>
</div>

@endsection

