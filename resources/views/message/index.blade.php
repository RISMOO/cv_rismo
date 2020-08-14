@extends('layouts.app')

@section('content')

<h1  class="text-muted">
Messages </h1>
<hr>


@if(count($message)>=1 )
@foreach ($message as $message)

<div class="row d-flex justify-content-center">
    <div class="m-2 d-flex align-content-start flex-wrap">

<div class="card border-primary" style="width: 18rem;">
    <img class="card-img-top"src="https://c.wallhere.com/photos/60/a2/quills_feathers_stones-163173.jpg!d" alt="Card image cap">
    <div class="card-body">
    <h5 class="text-capitalize card-title">{{$message->nom}}</h5><hr>
    <p class="card-text">{{$message->message}}</p>
    </div>
    <div class="card-footer">
        <h6 class="text-muted">Publié le : {{$message->created_at}}</h6>
      </div>
</div>&emsp;&emsp;

    </div>
</div>
@endforeach

</div>

@else
<p>Aucun messages existants !</p>
@endif





    @endsection
