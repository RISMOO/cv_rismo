@extends('layouts.app')

@section('content')


<div class="card-body">

<div class="row">
 <div class="col-md-12 text-left">

    <h5> {{$ressources->title}}</h5>

<div class="text-center">

<img src="{{asset('/storage/'.$ressources->image)}}" class="img-thumbnail top rounded mx-auto d-block" alt="Responsive image">
</div>
    <p class="text-muted">{!!$ressources->body!!}</p>
     <a href="{{$ressources->lien}}"><h5 class="text-primary">WIKIPEDIA</h5></a>
        <hr>


      <img class="img-thumbnail top rounded mx-auto d-block" src="{{asset('/storage/'.$ressources->exemple)}}" alt="{{$ressources->title}}"><hr>


        @if($ressources->lien2 ? $ressources->lien : null)
        <h5>Liens utiles</h5>

          <a href="{{$ressources->lien2}}"><h5 class="text-primary">OpenClassroom</h5></a>
      @endif
         @if($ressources->lien3 ? $ressources->lien3 : null)
          <a href="{{$ressources->lien3}}"><h5 class="text-primary">Udemy</h5></a><hr><br>
      @endif






    <h6 class="text-center"><a href="{{asset('demande/create/'.$ressources->id)}}" class="border btn btn-secondary btn-block">Faire une demande</a></h6><br>


  </div>

</div>

</div>
@endsection
