@extends('layouts.app')

@section('content')



    <h5 class="text-muted text-left text-underline mb-0">COMPETENCES</h5><br>




@foreach ($competence as $competence)
<div class="container">
    <div class='row'>
        <div class="col-sm-12 col-lg-8" style="width:70rem ">
<div class="media">
    <img class="align-self-start mr-3" src={{$competence->lien}} alt="Generic placeholder image">
    <div class="media-body">
        <h5 class="mt-0 mb-1">{{$competence->nom}}</h5>
       <div class="mr-2 progress">

        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:{{$competence->pourcentage}}%" >

            </div>

        </div>

    </div>
  </div>

</div>
    </div>
</div><br>
@endforeach


    @endsection
