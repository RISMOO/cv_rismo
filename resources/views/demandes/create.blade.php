

@extends('layouts.app')


@section('content')
<div class="card-body">

    <a class=""><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}"></a>


<h3 class="text-primary">Demande de labs </h3>
<hr>

<div class="form-group">


{!! Form::open(['action'=> 'DemandeController@store','method'=>'POST']) !!}

<div class="form-group">
    <h5 class="text-light"> {{ Form::label('Nom du Lab','Nom du Lab')}}</h5>
     <h6 class="">{{ Form::text('Labs','',['class'=>'form-control border text-muted','placeholder'=>''])}}</h6>

     </div>
  </div>
<div class="form-group">

<h5 class="text-light">{{Form::label('Ressources disponibles', 'Ressources disponibles')}}</h5>

<h6>{{Form::select('ressources',$ressources,(isset($ressource_selected)) ? $ressource_selected : '0',['class'=>'custom-select border text-success font-weight-bold ','placeholder'=> ''])}}</p>
    
</div>
<div class="form-group">

    <h5 class="text-light">{{ Form::label('Date de début','Date de début ')}}</h5>
   <h6> {{ Form::Date('Date_de_debut','',['class'=>'form-control border text-dark ','placeholder'=>'','required'])}}</h6>
</div>

<div class="form-group">

    <h5 class="text-light"> {{ Form::label('Date de fin','Date de fin')}}</h5>
   <h6> {{ Form::Date('Date_de_fin','',['class'=>'form-control border text-dark','placeholder'=>'','required'])}}</h6>
</div>


<br>

<h5 class=""><i class="fas fa-brain"></i>



{!! Form::submit("Envoyer ",['class'=>'border mt-3 btn btn-secondary btn-block '])!!}
</h5><br>

{!! Form::close()!!}

</div>

@endsection
