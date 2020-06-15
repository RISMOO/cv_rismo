@extends('layouts.app')
@section('content')


@section('slider')
<h5 class="text-blue">{{$catalogue}}</h5>
<div class="card-body">

<div class="row">
<div class="col-md-12 mt-5">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">


            @foreach ($ressources as $ressource)



          <div class="carousel-item @if($loop->first) active @endif">
          <img class="d-block w-100 rounded mx-auto d-block"src="{{asset('/storage/'.$ressource->image)}}"  alt="{{$ressource->title}}"height="500" width='100%'>
          </div>
        @endforeach

    </div>
      <hr>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>


@endsection
    <div class="row">
        @foreach ($ressources as $ressource)
        <div class="col-md-4">

         <a href="{{url('/catalogue/'.$ressource->slug)}}"><!--helper route -->
        <img class="img-thumbnail top rounded mx-auto d-block height:100vh" src="{{asset('/storage/'.$ressource->image)}}" alt="image">

            <h4 class="card-title">{{$ressource->title}}</h4></a>
            <p class="card-text">{{ $ressource->excerpt }}</p>
            </div>




@endforeach


    </div>
</div>
<div class="pagination mt-2">
    {{$ressources->links()}}




@endsection




@section('javascript')
<script>

    $(document).ready(function(){
        $('.carousel').carousel()
    })

</script>

@endsection
