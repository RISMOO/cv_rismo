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
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/home" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
    <div class="dropdown-menu border-secondary" style="Menu">
        <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"><br><hr>

      <a class="dropdown-item" href="/catalogue">Catologue Ressources</a>
      <a class="dropdown-item" href="/demande/create">Demande de labs</a>

      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/home"><i class="fa fa-fw fa-home"></i> Home</a> </a>
    </div>

    </div>
  </li>

    </ul>
   @else
  @endif
                    <!-- Right Side Of Navbar -->
         <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
         @if (Auth::guest())


                   @else

                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/home" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu border-secondary  dropdown-menu-right " style="Menu">
                        <a class="mt-2"><img src="{{asset('images/IMT_Atlantique_logo_RVB_Negatif_Baseline_250x170.png')}}"><br><hr>

                      <a class="dropdown-item" href="/home"><i class='fa fa-archway'></i>Tableau de bord</a>
                      <a class="dropdown-item" href="/admin"><i class='fa fa-cogs'>&nbsp;</i>Admin</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                       Se deconnecter
                   </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{csrf_field()}}
                                    </form>
                                </li>
                            </ul>
                         </li>
                        @endif
                    </ul>
                </div>

        </nav>









