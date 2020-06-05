@extends('layouts.app')

@section('content')


<div class="row">
 <div class="col-md-12 text-right">


   </div>
  </div>
<div class="card mb-3">
    <h3 class="card-header">{{$ressources->title}}</h3>

<img class="img-thumbnail" src="{{asset('storage/'.$ressources->image)}}"alt="{{$ressources->title}}">
  <div class="card-body">
    <p class="text-white">{!!$ressources->body!!}</p>
      <h5><a href="{{$ressources->lien}}">WIKIPEDIA<h5></a>
        <hr>

 <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <img class="img-thumbnail" src="{{asset('storage/'.$ressources->exemple)}}"alt="{{$ressources->title}}"></li>
 </ul>
     <div class="card-body">
        <h6>Liens utiles</h6>
        @if($ressources->lien2 ? $ressources->lien : null)
          <li class="list-group-item"><a href="{{$ressources->lien2}}" class="card-link">OpenClassroom</a></li>
      @endif
         @if($ressources->lien3 ? $ressources->lien3 : null)
          <li class="list-group-item"><a href="{{$ressources->lien3}}" class="card-link">Udemy</a></li>
      @endif
    </div>
  <div class="card-footer text-muted">


  </div>
 </div>



@endsection
