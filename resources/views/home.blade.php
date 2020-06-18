@extends('layouts.app')
@section('content')


@if(count($demande) == 0)
<div class="container">
@endif
    <div class="row">
        <div class="d-flex justify-content-between col-12">

          <h6 class="text-black" style="font-size:24px"><a href="/demande/create">
            <i class="fa fa-arrow-circle-o-right" style="font-size:24px"></i></i> Faire une demande</a></h6>
              <h6 class="text-black" style="font-size:24px"><a href="/catalogue/">Voir le catalogue <i class="fa fa-arrow-circle-o-left" style="font-size:24px"></i></a></h6>
          </div>
        </div>
            <br>
     <div class="text-center">
        @if(count($demande) == 0)
     <p><a href="/Demo" class="is-active sf-depth-1" target ><i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i> Comment faire une demande</a></p>
        @endif
    </div>
       <br>
    <div class="card-body">
     @if(!count($demande) == 0)
      <a class=""><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}"></a>
       <h3 class="text-primary text-center mb-4">Liste <br>de vos demandes en cours </h3>

@endif
 @if(count($demande)>=1)
     <h6 class="text-center mb-2">Vous avez &nbsp;<strong class="text-primary font-weight-bolder font-size-2rem">{{count($demande)}}</strong>&nbsp;&nbsp;demande{{ count($demande) > 1 ? 's' : "" }}&nbsp;en cours </h6>
@endif

   @if(count($demande) >= 1 )
   @foreach ($demande as $demande)
  <div class=container>
    <div class="card-body mb-4 mt-2">
    <div class="row vdivide">

        <div class="w3-tag w3-round w3-green col-sm-4 text-center">

            <h5 class="text-light "> Nom du lab </h5><hr>

            <h6 class="text-primary font-weight-bolder " style="font-size:18px">{{$demande->Labs}}<span></h6>
        </div>

        <div class="col-sm-4 text-center"><h5 class="text-light">Ressource</h5><hr>
         <h6 class="text-primary font-weight-bolder" style="font-size:18px">{{$demande->ressource['title']}}<span></h6>

        </div>
        <div class="col-sm-4 text-center"><h5 class="text-light">Demande le</h5><hr>
            <h6 class="text-primary font-weight-bolder " style="font-size:18px">{{$demande->created_at}}<span></h6>

           </div>

    </div>
    </div>



        <h6 class="text-center"><a href="{{asset('/demande/'.$demande->id)}}" class="btn btn-secondary mb-4  btn-block">Voir la demande</a><h6>
  </div>

   @endforeach
        <!-- <h4 class="text-capitalize text-center "> Auth::user()->name </h4>-->
@else

<div class="container text-center mt-2">


    <div>
        <h5 class="text-center ">Bonjour<h5><h5 class="text-center font-weight-bold text-uppercase text-primary "> {{Auth::user()->name}}</h5>
     </div>

   <img src="{{asset('images/IMT_Atlantique_campus.png')}}">
</div>
<br>
   <div>
       <h5 class="text-center mt- mb-5"> vous n'avez aucune demande </h5>
    </div>


     </div>
      </div>



@endif



@endsection

