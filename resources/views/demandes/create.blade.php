

@extends('layouts.app')


@section('content')
<div class="card-body">

    <a class=""><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}" alt="logo"></a>


<h3 class="text-primary">Demande de labs </h3>
<hr>


<div class="form-group">


{!! Form::open(['action'=> 'DemandeController@store','method'=>'POST']) !!}

<div class="form-group">
    <h5 class="text-light"> {{ Form::label('Nom','Nom du Lab')}}</h5>
     <p>{{Form::text('Labs','',['class'=>'form-control border text-muted'])}}</p>

     </div>

<div class="form-group">

<h5 class="text-light">{{Form::label('Ressources_Disponibles','Ressources disponibles')}}</h5>

<p>{{Form::select('ressources',$ressources,(isset($ressource_selected)) ? $ressource_selected : '0',['class'=>'custom-select border ','placeholder'=> 'ressources disponibles'])}}</p>

</div>
<div class="form-group">

    <h5 class="text-light">{{ Form::label('Date_de_debut','Date de debut')}}</h5>
   <p> {{ Form::Date('Date_de_debut','',['class'=>'form-control border text-dark ','required'])}}</p>
</div>

<div class="form-group">

    <h5 class="text-light"> {{ Form::label('Date_de_fin','Date de fin')}}</h5>
   <p>{{ Form::Date('Date_de_fin','',['class'=>'form-control border text-dark','required'])}}</p>
</div>

<br>

<p>{!! Form::submit("Envoyer ",['class'=>'border mt-3 btn btn-secondary btn-block '])!!}


</p><br>

{!! Form::close()!!}

</div>
</div>
@endsection
