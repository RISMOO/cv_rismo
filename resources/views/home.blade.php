@extends('layouts.app')

@section('content')


 <div class="jumbotron mt-5">
    <div class="align-self-center">
 <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"></a><br>

        <div class="col-mb-8 text-center">

            <h4 class="text-capitalize text-center mb-2">Liste<br> de vos<br>
                demandes en cours</h4><hr>

           <!-- <h4 class="text-capitalize text-center "> Auth::user()->name </h4>-->
           <h6><a href="/demande/create" class="border-secondary btn btn-outline-primary"style="margin-bottom:15px">Faire une demande</a></h6>
        </div>
                   <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif


                    @if(count($demande) >= 1 )
                    @foreach ($demande as $demande)

<div class="container">
                        <div class="card border-primary text-center mb-3" style="max-width: 65rem;">
                            <h6 class="text-white mt-4">Nom du Lab</h6> <h5 class="text-success">{{$demande->Labs}}</h5>
                      @if($demande->ressource['title'] ? $demande->ressource['title'] :null)
                      <h6 class="text-white mt-2 mb-2">Nom de la Ressource</h6> <h5 class="text-success">{{$demande->ressource['title']}}</h5>
                      @endif

                        </div>

</div>
     <p>  <a href="/demande/{{$demande->id}}" class="text-primary">Voir la demande....</a></p>

                    @endforeach
        </div>
                    @else

                    <p> Vous n'avez aucune demande </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

