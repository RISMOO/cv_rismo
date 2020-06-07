

@extends('layouts.app')


@section('content')
<div class="jumbotron mt-5">

    <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"></a><hr>


<h3 class="text-primary">Demande de labs </h3>
<hr>

<div class="form-group">


{!! Form::open(['action'=> 'DemandeController@store','method'=>'POST']) !!}

<div class="form-group">
    <p class="text-primary"> {{ Form::label('Nom du Lab','Nom du Lab')}}</p>
     <p> {{ Form::text('Labs','',['class'=>'form-control ','placeholder'=>'Le nom du Lab'])}}</p>

  </div>
<div class="form-group">

<p class="text-primary">{{Form::label('Ressources disponibles', 'Ressources disponibles')}}</p>

<p>{{Form::select('ressources',$ressources,'0',['class'=>'custom-select font-weight-bold ','placeholder'=> 'Ressources'])}}</p>

</div>
<div class="form-group">

    <p class="text-primary">{{ Form::label('Date de début','Date de début ')}}</p>
   <p> {{ Form::Date('Date_de_debut','',['class'=>'form-control ','placeholder'=>'Date de debut','required'])}}</p>
</div>

<div class="form-group">

    <p class="text-primary"> {{ Form::label('Date de fin','Date de fin')}}</p>
   <p> {{ Form::Date('Date_de_fin','',['class'=>'form-control ','placeholder'=>'Date de fin','required'])}}</p>
</div>



<hr>
<h5>


{!! Form::submit("Envoyer ",['class'=>'border-secondary btn btn-outline-primary'])!!}
</h5>

{!! Form::close()!!}

</div>

@endsection
