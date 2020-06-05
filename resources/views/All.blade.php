@extends('layouts.app')

@section('content')
<div class="col-md-12 text-right">
    <h6><a href="{{url('/home')}}">Return Back</h6></a> <!--//helper url fonction prete a l'emploi-->
    </div>
 <div class="jumbotron mt-5">
   <div class="container">
     <div class="row justify-content-center">
        <div class="col-mb-8 text-center">
                   <h2 class="text-capitalize text-center text-muted mb-2">
                   toute les demandes</h2>
                   <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <a class="mt-2"><img src="{{asset('images/poulpe.gif')}}"><br><hr>
                    @if(count($demande) >= 1 )
                    @foreach ($demande as $demande)

                        <div class="card border-success text-center mb-3" style="max-width: 50rem;">
                            <h6 class="text-blue mt-3">Nom du demandeur</h6><h6 class="text-white">{{$demande->user_name}}</h6><hr>
                            <h6 class="text-blue mt-2">Nom du Lab</h6> <h6 class="text-white">{{$demande->Labs}}</h6>

                      <h6 class="text-center mt-2">Nom de la Ressource</h6> <h6 class="text-white">{{$demande->ressource['title']}}</h6>


                            <div class="card-body">
                                <h6 class="mt-2 text-white"> Date de début </h6><h6> {{$demande->Date_de_debut}}</h6>
                                <h6 class="mt-2 text-white"> Date de fin </h6><h6> {{$demande->Date_de_fin}}</h6><hr>

                              <h6 class="text-center mt-3">Demandé le</h6> <h6 class="text-white">{{$demande->created_at}}</h6>

                            </div>
                          </div>

                    @endforeach
                    @else

                    <p> Vous n'avez aucune demande </p>
                    @endif

                      <hr>
               <p class="text-left"></p><hr>

                   <h6><a href="/demande/create" class="btn btn-outline-primary"style="margin-bottom:15px">Faire une demande</a></h6>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

