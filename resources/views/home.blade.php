@extends('layouts.app')
@section('content')


<div class="container mt-5">

    <div class="d-flex justify-content-between">
    <h6 class="text-center"><a href="/demande/create" class="border-secondary btn btn-outline-success btn-lg"style="margin-bottom:15px">Faire une demande</a></h6>
    <h6 class="text-center"><a href="/catalogue/" class="border-secondary btn btn-outline-primary btn-lg"style="margin-bottom:15px">VOIR LE CATALOGUE</a></h6>
    </div>
    <div class="card border-secondary text-center mb-3" style="max-width:auto;">
    <div class="d-flex justify-content-between">
 <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"></a><br>
</div>
     <h4 class="text-capitalize text-center mb-2">Liste<br> de vos<br>demandes en cours</h4><hr>

   @if(count($demande) >= 1 )
   @foreach ($demande as $demande)
   <div class="d-flex justify-content-between">
   <div class="container">
       <div class="row">
           <div class="col-sm">
     <div class="card border-secondary text-center mb-3" style="width:auto">
       <h6 class="text-white mt-4">Nom du Lab</h6> <h5 class="text-success">{{$demande->Labs}}</h5>
       <h6 class="text-white mt-2 mb-2 ">Nom de la Ressource</h6> <h5 class="text-success">{{$demande->Ressource['title']}}</h5>
       <h6 class="text-white mt-4">Demande le</h6> <h5 class="text-success mb-2">{{$demande->created_at}}</h5><hr>
       <p><a href="/demande/{{$demande->id}}" class="text-primary">Voir la demande....</a></p>
     </div>
           </div>
       </div>
     </div>
   </div>
   @endforeach
     <hr>

@else
 <p>Vous n'avez aucune demande </p>
@endif

    </div>         <!-- <h4 class="text-capitalize text-center "> Auth::user()->name </h4>-->
  </div>
<hr>


@endsection

