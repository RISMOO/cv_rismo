@extends('layouts.app')


@section('content')
<div class="col-md-12 text-right">

    </div>
<div class="jumbotron mt-5">
    <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"></a><hr>
<h3 class="text-primary">Modifier votre demande  </h3>

<hr>
{!! Form::open(['action'=> ['DemandeController@update',$demande->id],'method'=>'POST']) !!}

<div class="form-group">
    <p class="text-primary"> {{ Form::label('Nom du Lab','Nom du Lab')}}</p>
   <p> {{ Form::text('Labs',$demande->Labs,['class'=>'form-control','placeholder'=>'le nom de votre labs'])}}</p>
</div>

<div class="form-group">

    <p class="text-primary">{{Form::label('Ressources', 'Ressources')}}</p>

    <p class="font-weight-bold">{{Form::select('ressource',$ressources,$demande->ressource['id'],['class'=>'custom-select font-weight-bold','placeholder'=>'ressources'])}}</h5>



<div class="form-group">
    <p class="text-primary">{{ Form::label('Date de début','Date de début ')}}</p>
   <p> {{ Form::date('Date_de_debut',$demande->Date_de_debut,['class'=>'form-control'])}}</p>
</div>


<div class="form-group">
    <p class="text-primary">{{ Form::label('Date de fin','Date de fin ')}}</p>
   <p> {{ Form::date('Date_de_fin',$demande->Date_de_fin,['class'=>'form-control'])}}</p>
</div>

<hr>
<hr>
<h5>
    {{Form::hidden('_method','PUT')}}<!--mettre a jour avec la methode PUT-->
    {{Form::submit("Valider votre demande ",['class'=>'border-secondary btn btn-outline-success btn-block'])}}
</h5>
{!! Form::close()!!}
<h5><hr>
{!! Form::open(['action'=>['DemandeController@destroy',$demande->id],'method'=>'POST']) !!}
{{ Form::hidden('_method','DELETE')}}
{{ Form::submit('Supprimer votre demande',['class'=>'border-secondary btn btn-outline-danger btn-block'] )}}
{!! Form::close() !!}
</h5>

</div>
@endsection
