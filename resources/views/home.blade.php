@extends('layouts.app')
@section('content')


@if(count($demande) == 0)
<div class="container">
@endif
    <div class="row">
        <div class="d-flex justify-content-between col-12">
          <h6 class="text-black" style="font-size:24px"><a href="/demande/create">
            <i class="fa fa-angle-right" style="font-size:34px"></i> Faire une demande</a></h6>
              <h6 class="text-black" style="font-size:24px"><a href="/catalogue/">Voir le catalogue <i class="fa fa-angle-left" style="font-size:34px"></i></a></h6>
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
       <h3 class="text-primary text-center">Liste <br>de vos demandes en cours </h3>

@endif
 @if(count($demande)>=1)
     <h6 class="text-center mb-2">Vous avez &nbsp;<strong class="text-success font-size-2rem">{{count($demande)}}</strong>&nbsp;&nbsp;demande(s)&nbsp;en cours </h6>
@endif
<hr>
   @if(count($demande) >= 1 )
   @foreach ($demande as $demande)
  <div class=container>
    <div class="card-body mb-4 mt-2">
    <div class="row vdivide">

        <div class="col-sm-4 text-center"><h5 class="text-light">Nom du lab</h5><hr>
            <h6 class="text-success " style="font-size:20px" style="font-size:18px">{{$demande->Labs}}<span></h6>
        </div>

        <div class="col-sm-4 text-center"><h5 class="text-light">Ressource</h5><hr>
         <h6 class="text-success " style="font-size:20px" style="font-size:18px">{{$demande->ressource['title']}}<span></h6>

        </div>
        <div class="col-sm-4 text-center"><h5 class="text-light">Demande le</h5><hr>
            <h6 class="text-success " style="font-size:20px" style="font-size:18px">{{$demande->created_at}}<span></h6>

           </div>

    </div>
    </div>



        <h6 class="text-center"><a href="{{asset('/demande/'.$demande->id)}}" class="btn btn-secondary  btn-block">Voir la demande</a><h6>
  </div>
  <hr>
   @endforeach
        <!-- <h4 class="text-capitalize text-center "> Auth::user()->name </h4>-->
@else

<div class="container">



      <div class="d-flex justify-content-between mb-3">
        <div class="card-body">
<div class="mt-2">
   <img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}">
</div>

   <div>
       <h5 class="text-center ">Bonjour<br><h5 class="text-center font-weight-bold text-uppercase text-success"> {{Auth::user()->name}}</h5><h5 class="text-center mb-5"> vous n'avez aucune demande </h5>
    </div>


     </div>
      </div>


         <hr>
@endif



@endsection

