@extends('layouts.app')


@section('content')
<div class="card-body">


    <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}" alt="IMT"></a>
<h3 class="text-primary">Modifier votre demande  </h3>

<hr>
{!! Form::open(['action'=> ['DemandeController@update',$demande->id],'method'=>'POST']) !!}

<div class="form-group">
    <h5 class="text-light">{{ Form::label('Nom_du_Lab','Nom du Lab')}}</h5>
   <p>{{ Form::text('Labs',$demande->Labs,['class'=>'form-control border font-weight-bolder text-primary','placeholder'=>'le nom de votre labs'])}}</p>
</div>

<div class="form-group">

    <h5 class="text-light">{{Form::label('Ressources', 'Ressources')}}</h5>

    <p>{{Form::select('ressource',$ressources,$demande->ressource['id'],['class'=>'custom-select font-weight-bolder  text-primary border','placeholder'=>'ressources'])}}</p>

</div>

<div class="form-group">
    <h5 class="text-light">{{ Form::label('Date_de_debut','Date de debut ')}}</h5>
   <p>{{ Form::date('Date_de_debut',$demande->Date_de_debut,['class'=>'form-control font-weight-bolder text-primary border'])}}</p>
</div>


<div class="form-group">
    <h5 class="text-light">{{ Form::label('Date_de_fin','Date de fin ')}}</h5>
   <p>{{ Form::date('Date_de_fin',$demande->Date_de_fin,['class'=>'form-control font-weight-bolder text-primary border'])}}</p>
</div>


<br>
    {{Form::hidden('_method','PUT')}}<!--mettre a jour avec la methode PUT-->
  <h6>{{Form::submit("Valider votre demande ",['class'=>'border btn btn-secondary btn-block'])}}</h6><br>


{!! Form::open(['action'=>['DemandeController@destroy',$demande->id],'method'=>'POST']) !!}
{{ Form::hidden('_method','DELETE')}}
<h6>{{ Form::submit('Supprimer votre demande',['class'=>'border btn btn-secondary btn-block'] )}}</h6>
{!! Form::close() !!}


</div>
@endsection
