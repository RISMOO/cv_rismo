@if (Auth::user())

<nav class="navbar navbar-expand-lg navbar-dark bg-blue">&nbsp;


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">

      <ul class="navbar-nav mr-auto">
          <!--
        <li class="nav-item active">
          <a class="nav-link" href="/contact">Demande de Labs<span class="sr-only">(current)</span></a>
        </li>-->

<li class="nav-item dropdown ">
   <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="/home" role="button" aria-haspopup="true" aria-expanded="false"><h6 class="text-light font-weight-bold">menu</h6></a>
    <div class="dropdown-menu border">
        <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}" alt="IMT"><br><hr></a>

      <a class="dropdown-item" href="/catalogue">Catalogue Ressources</a>

      <a class="dropdown-item text-black" href="/demande/create">Demande de labs</a>

      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/home"><i class="fa fa-fw fa-home">&nbsp;</i>Home</a>

      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-dark" href="/Demo"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Comment faire une demande</a>
    </div>
</li>
</ul>

    </div>







   @else
  @endif
                    <!-- Right Side Of Navbar -->
         <ul class="nav navbar-nav navbar-right ">
                        <!-- Authentication Links -->
         @if (Auth::guest())


                   @else

                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/home" role="button" aria-haspopup="true" aria-expanded="false"><h6 class="text-primary font-weight-bold text-uppercase">{{ Auth::user()->name }}</h6></a>
                    <div class="dropdown-menu border  dropdown-menu-right ">
                        <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Baseline_250x170.jpg')}}" alt="IMT"></a><br><hr>

                      <a class="dropdown-item" href="/home"><i class='fa fa-archway'></i>Tableau de bord</a>
                      <a class="dropdown-item" href="/admin"><i class="fa fa-user"></i>&nbsp;  Admin</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                       Se deconnecter
                   </a>
                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{csrf_field()}}
                                    </form>

                         </li>
                        </ul>

                    </nav>
                        @endif













