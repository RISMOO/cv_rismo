@extends('layouts.app')

@section('content')



    <div class="jumbotron mt-5">
        <div class="align-self-center">

     <a class="mt-1 "><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"></a><br>

            <div class="col-mb-8 text-center">

                <h4 class="text-capitalize text-center mb-2"> Vos<br>
                    demandes</h4>
                   <hr>


                        <div class="card border-primary text-center mb-3" style="max-width:70rem;">

                        <h6 class="mt-4 text-white">Votre demande de Lab</h6><h5 class="text-success">{{$demande->Labs}}</h5>
                        @if($demande->Ressource['title'] ? $demande->Ressource['title'] :null)
                     <h6 class="mt-3 text-white">Votre demande de ressource</h6><h5 class="text-success">{{$demande->Ressource['title']}}</h5>
                      @endif

                            <h6 class="mt-3 text-white"> Date de début </h6><h5 class="text-success"> {{$demande->Date_de_debut}}</h5>
                           <h6 class="mt-2 text-white"> Date de fin </h6><h5 class="text-success"> {{$demande->Date_de_fin}}</h5><hr>


                              <h6 class="text-white"> Demande le </h6><h6 class="text-success">{{$demande->created_at}}</h6>
                                @if($demande->updated_at ? $demande->updated_at :null )
                              <h6 class="text-white"> Modifié le </h6><h6 class="text-success"> {{$demande->updated_at}}</h6><br>
                               @endif
                            </div>

                          </div>
                            <div class="card text-center ">
                                <h5><a href="/demande/{{$demande->id}}/edit" class="text border-secondary btn btn-outline-primary btn-block"style="margin-bottom:15px">Modifier votre demande</a></h5>


                              <h5> {!! Form::open(['action'=>['DemandeController@destroy',$demande->id],'method'=>'POST']) !!}
                               {{ Form::hidden('_method','DELETE')}}
                              {{ Form::submit('Supprimer',['class'=>'border-secondary btn btn-outline-danger btn-block'] )}}
                              {!! Form::close() !!}
                              </h5>
                            </div>
                            </div>

                          </div>


@endsection

