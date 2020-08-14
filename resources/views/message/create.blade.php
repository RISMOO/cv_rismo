@extends('layouts.app')

@section('content')



<div class="form-group">



    {!! Form::open(['action'=> 'MessageController@store','method'=>'POST']) !!}

    <div class="form-group">
        <h5 class="text-muted">{{ Form::label('nom','Nom')}}</h5>
         <p>{{Form::text('nom','',['class'=>'form-control border text-muted','placeholder'=>'Votre nom','required'])}}</p>

         </div>

    <div class="form-group">

    <h5 class="text-muted">{{Form::label('email','Email')}}</h5>
    <p>{{Form::text('email','',['class'=>'form-control border text-muted','placeholder'=>'Votre Email','required'])}}</p>
    </div>
    <div class="form-group">

        <h5 class="text-muted">{{ Form::label('Votre message','Votre message')}}</h5>
       <p> {{ Form::textarea('message','',['class'=>'form-control border text-dark ','placeholder'=>'Votre message','required'])}}</p>
    </div>



    <p>{!! Form::submit("Envoyer ",['class'=>'border mt-3 btn btn-success btn-block '])!!}


    </p><br>

    {!! Form::close()!!}

    </div>
    </div>
    @endsection
