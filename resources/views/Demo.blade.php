@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-md-12 mt-5">
        <div class="jumbotron">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <h5 class="text-blue">{{$demonstration}}</h5>

                @foreach ($demos as $demo)



              <div class="carousel-item @if($loop->first) active @endif">
              <img class="d-block w-100 img-thumbnail border-dark"src="{{asset('/storage/'.$demo->image)}}"  alt="{{$demo->title}}"height="500" width='100%'><hr>
              <h5>{{$demo->description}}</h5>
              </div>
            @endforeach


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
</div>

</div>


@endsection

@section('javascript')
<script>

    $(document).ready(function(){
        $('.carousel').carousel()
    })

</script>
@endsection

