@extends('layouts.app')


@section('content')
<div class="card-body">


    <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}"></a>
<h3 class="text-primary">Modifier votre demande  </h3>

<hr>
{!! Form::open(['action'=> ['DemandeController@update',$demande->id],'method'=>'POST']) !!}

<div class="form-group">
    <h5 class="text-light">{{ Form::label('Nom du Lab','Nom du Lab')}}</h5>
   <h6>{{ Form::text('Labs',$demande->Labs,['class'=>'form-control border text-success','placeholder'=>'le nom de votre labs'])}}</h6>
</div>

<div class="form-group">

    <h5 class="text-light">{{Form::label('Ressources', 'Ressources')}}</h5>

    <h6>{{Form::select('ressource',$ressources,$demande->ressource['id'],['class'=>'custom-select text-success border','placeholder'=>'ressources'])}}</h6>



<div class="form-group">
    <h5 class="text-light">{{ Form::label('Date de début','Date de début ')}}</h5>
   <h6> {{ Form::date('Date_de_debut',$demande->Date_de_debut,['class'=>'form-control text-success border'])}}</h6>
</div>


<div class="form-group">
    <h5 class="text-light">{{ Form::label('Date de fin','Date de fin ')}}</h5>
   <h6> {{ Form::date('Date_de_fin',$demande->Date_de_fin,['class'=>'form-control text-success border'])}}</h6>
</div>


<br>
<h5>
    {{Form::hidden('_method','PUT')}}<!--mettre a jour avec la methode PUT-->
    {{Form::submit("Valider votre demande ",['class'=>'border btn btn-secondary btn-block'])}}
</h5>
{!! Form::close()!!}


<h5>


{!! Form::open(['action'=>['DemandeController@destroy',$demande->id],'method'=>'POST']) !!}
{{ Form::hidden('_method','DELETE')}}
<p>{{ Form::submit('Supprimer votre demande',['class'=>'border btn btn-secondary btn-block'] )}}</p>
{!! Form::close() !!}
</h5>

</div>
@endsection
