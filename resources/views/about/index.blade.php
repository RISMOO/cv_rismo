@extends('layouts.app')



@section('content')
<header class="header-area" id="header-area">
    <div class="dope-nav-container breakpoint-off">
        <div class="container">
            <div class="row">
 <nav class="dope-navbar justify-content-between" id="dopeNav">

    <!-- Logo -->
    <a class="nav-brand" href="/">
        <img src="images/logo-rond.png" alt="">
    </a>

    <!-- Navbar Toggler -->
    <div class="dope-navbar-toggler">
        <span class="navbarToggler">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </div>

    <!-- Menu -->
    <div class="dope-menu">

        <!-- close btn -->
        <div class="dopecloseIcon">
            <div class="cross-wrap">
                <span class="top"></span>
                <span class="bottom"></span>
            </div>
        </div>

        <!-- Nav Start -->
        <div class="dopenav">
            <ul id="nav">
                    <li>
                        <a href="#section_about">A PROPOS</a>
                    </li>
                    <li>
                    <a href="#section_projets">PROJETS</a>
                    </li>
                    <li>
                        <a href="#section_messages">MESSAGES</a>
                    </li>
                    <li>
                        <a href="#section_contact">CONTACT</a>

                    </li>
                    <li>
                            <a href="cv">CV</a>
                        </li>



            </ul>
        </div>
    </div> <!-- Nav End -->
</nav>
 </div>
     </div>
      </div>
        </header><br>
        <section class="skill-section section-gap-half">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 skill-left">
                        <h2>Bienvenue sur mon site</h2>
                        <p>
                            Fraichement diplomé,j'ai créé ce site afin de mettre en pratique mes connaissances acquises lors de ma formation.Il sera développé en <strong><a href=" https://fr.wikipedia.org/wiki/Laravel" title="source Wikipedia"> Laravel </strong></a>pour la partie Back-end et en <strong><a href="https://fr.wikipedia.org/wiki/Vue.js" title="Source Wikipedia"> Vuejs </a></strong> le Front-end</p></p>
                        </p><hr>
                        <h2>Progression du site</h2><br>

                        <div class="prog_container">
                            <div class="prog_text">
                                <span class="title">
                                    design
                                </span>
                                <span class="precent" style="left:85%">85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="prog_container">
                            <div class="prog_text">
                                <span class="title">
                                    securité
                                </span>
                                <span class="precent" style="left:95%">95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="prog_container">
                            <div class="prog_text">
                                <span class="title">
                                    responsive
                                </span>
                                <span class="precent" style="left:99%">99%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="99"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="prog_container">
                            <div class="prog_text">
                                <span class="title">
                                    vue js
                                </span>
                                <span class="precent" style="left:75%">75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 skill-right">
                    <img class="img-fluid" src="{{asset('images/construct.jpg')}}"alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End skill section -->

        <!-- Start stat section -->
        <section class="stat-section section-gap-half">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-stat">
                            <i class="ti-thumb-up"></i>
                            <h1>
                                <span class="counter">3</span>+</h1>
                            <h4>Projets Réalisés</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-stat">
                            <i class="ti-face-smile"></i>
                            <h1>
                                <span class="counter">20</span>+</h1>
                            <h4>Avis</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-stat">
                            <i class="ti-paint-bucket"></i>
                            <h1>
                                <span class="counter">132</span>+</h1>
                            <h4>Tasse de café</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-stat">
                            <i class="ti-check-box"></i>
                            <h1>
                                <span class="counter">2</span>+</h1>
                            <h4>Projets en cours</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End banner section -->

        <!-- Start about section -->
        <section class="about-section section-gap-full relative" id="section_about">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-12 about-left">
                        <div class="zoom">
                            <div class="image w-100">
                                <div class="post-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                      <img class="img-thumbnail w-100" src="{{asset('images/plage.jpg')}}" alt="">
                               </div>

                    </div>
                </div>

                    </div>

                    <div class="col-lg-6 col-md-12 about-right">

                        <h3>A propos</h3>

                        <h2>Qui suis je</h2>
                        <p>
                            Passionné par le monde du web depuis toujours,j'ai souhaité donner un tournant a ma vie professionnel en suivant une formation. J'ai obtenu le titre de développeur Web et Web mobile a <a href='https://www.afpa.fr/centre/centre-de-brest'>l'AFPA de Brest</a>
                        </p>
                        <a class="primary-btn" href="#">Download Resume </a>
                    </div>
                </div>
            </div>
            <div class="floating-shapes">
                <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                    <img src="{{asset('images/shape/fl-shape-1.png')}}" alt="">
                </span>
                <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                    <img src="{{asset('images/shape/fl-shape-2.png')}}" alt="">
                </span>
                <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                    <img src="{{asset('images/shape/fl-shape-3.png')}}" alt="">
                </span>
                <span data-parallax='{"x": -20, "y": 180}'>
                    <img src="{{asset('images/shape/fl-shape-4.png')}}" alt="">
                </span>
                <span data-parallax='{"x": 300, "y": 70}'>
                    <img src="{{asset('images/shape/fl-shape-5.png')}}" alt="">
                </span>
                <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                    <img src="{{asset('images/shape/fl-shape-6.png')}}" alt="">
                </span>
                <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                    <img src="{{asset('images/shape/fl-shape-7.png')}}" alt="">
                </span>
                <span data-parallax='{"x": 60, "y": -100}'>
                    <img src="{{asset('images/shape/fl-shape-8.png')}}" alt="">
                </span>
                <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                    <img src="{{asset('images/shape/fl-shape-9.png')}}" alt="">
                </span>
            </div>
        </section>


    </section>
    <section class="service-section section-gap-full"id="section_projets">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Mes Projets</h2>
                <p class="text-center">Réalisation en formation</p>
            </div>

            <div class="row owl-carousel ml-5" id="service-carusel">

                <div class="single-service mr-5">

                    <i class="ti-server" style="color:#691cff"></i>
                    <h4>CV</h4>
                    <p>
                        Un des 1er projets réalisé en php......
                    </p><br>
            <p>
                <a href="#">Voir le projet</a>
            </p>
                </div>



                <div class="single-service mr-5">
                    <i class="ti-server" style="color:#691cff"></i>
                    <h4>La fleur</h4>
                    <p>
                        V3 du projet lafleur réalisé en php .....
                    </p><br>
                    <p>
                        <a href="#">Voir le projet</a>
                    </p>
                </div>
                <div class="stage">
                <div class="single-service">
                    <i class="ti-server" style="color:#691cff"></i>
                    <h4>Stage</h4>
                    <p>
                        Réalisation d'une application ....
                             </p><br>
            <p>
                <a href="#">Voir le projet</a>
            </p>
                </div>
                </div>

            </div>
            </div>
        </div>
    </section>
        <!-- Start feature section -->
        <section class="feature-section section-gap-full" id="feature-section">
            <div class="container">
                <div class="row align-items-center feature-wrap">
                    <div class="col-lg-4 header-left">
                        <h2>

                            <br>Parcours
                               Professionnel

                        </h2>
                        <a class="primary-btn" href="/cv">En voir Plus
                            <span class="ti-arrow-right"></span>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="row features-wrap">
                            <div class="col-md-6">

                                <div class="single-feature relative">

                                    <div class="overlay overlay-bg"></div>
                                    <a href="/cv#section_competences">
                                    <span class="ti-comments-smiley"></span>
                                    </a>
                                    <h3>Compétences</h3></a>
                                    <h5>Extrait</h5>
                                    <p>
                                        Html5, css3....
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="single-feature relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="/cv#section_experience">
                                    <span class="ti-paint-roller"></span>
                                    </a>
                                     <h3>Experiences</h3></a>
                                    <h5>Extrait</h5>
                                    <p>
                                        Stage pratique....
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="single-feature relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="/cv#section_formations">
                                    <span class="ti-pencil-alt"></span>
                                    </a>
                                   <h3>Formations</h3>
                                    <h5>Extrait</h5>
                                    <p>
                                        Developpeur Web.....
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-feature relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="/cv#section_soft">
                                    <span class="ti-more"></span>
                                    </a>
                                   <h3>Softskills</h3>
                                    <h5>Extrait</h5>
                                    <p>
                                        Curieux....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feature section -->

<section class="testimonial-section section-gap-full" id="section_messages">
    @foreach($messages as $message)
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 testimonial-left">
                <h2>Vos Messages</h2>
                <p>
                    Ici vous trouverez les messages publiés
                </p>
            </div>
            <div class="col-lg-8 testimonial-right">
                <div class="testimonial-carusel owl-carousel" id="testimonial-carusel">
                    <div class="single-testimonial item">
                        <p>
                            {{$message->message}}
                        </p>
                        <div class="user-details d-flex flex-row align-items-center">
                            <div class="img-wrap">
                            <img src="{{asset('images/moi-mini.png')}}" alt="">
                            </div>
                            <div class="details">
                            <h4>{{$message->nom}}</h4>
                            <p>{{$message->fonction}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonial item">
                        <p>
                            “Bravo.Bon début”
                        </p>
                        <div class="user-details d-flex flex-row align-items-center">
                            <div class="img-wrap">
                            <img src="{{asset('images/avt1.jpg')}}"alt="">
                            </div>
                            <div class="details">
                                <h4>Remi paillet</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial item">
                        <p>
                            “Félicitation pour ton titre.”
                        </p>
                        <div class="user-details d-flex flex-row align-items-center">
                            <div class="img-wrap">
                            <img src="{{asset('images/avt2.jpg')}}"alt="">
                            </div>
                            <div class="details">
                                <h4>Regis Amber</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
        </div>
    </div>
    @endforeach
</section>


        <section class="contact-section padding-top-140" id="section_contact">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center">Contactez-moi</h2>
                    <p class="text-center">Laissez moi un message</p>
                </div>
                <div class="row address-wrap justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 single-address-col">
                        <i class="ti ti-mobile"></i>
                        <p>
                            +880-176875479
                            <br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 single-address-col">
                        <i class="ti ti-map-alt"></i>
                        <p>
                            1 rue de la destiné
                            <br> Brest 29200
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 single-address-col">
                        <i class="ti ti-email"></i>
                        <p>
                            tysef@live.fr
                            <br>
                        </p>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center form-row">
                    <div class="col-lg-9">

                            {!! Form::open(['action'=> 'MessageController@store','method'=>'POST']) !!}
                            <div class="row contact-form-wrap justify-content-center">
                                <div class="col-md-6 contact-name form-col">
                                  <h5>{{ Form::label('nom','Nom')}}</h5>
                                        <h6 class="text-capitalize">{{Form::text('nom','',['class'=>'form-control','required','text'=>'capitalize','placeholder'=>'Votre nom','onfocus'=>"placeholder",'onblur'=>'placeholder'])}}</h6>
                                </div>
                                <div class="col-md-6 contact-fonction form-col">
                                    <h5> {{Form::label('fonction','Fonction')}}</h5>
                                    <h6 class="text-capitalize">{{Form::text('fonction','',['class'=>'form-control','required','placeholder'=>'Votre fonction','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</h6>

                                 </div>

                                <div class="col-lg-12 contact-email form-col">
                                   <h5> {{Form::label('email','Email')}}</h5>
                                   <p>{{Form::text('email','',['class'=>'form-control','required','placeholder'=>'Votre email','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</p>

                                </div>


                                <div class="col-lg-12">
                                    <h5>{{ Form::label('message','Message')}}</h5>
                                    <p class="text-capitalize">{{ Form::textarea('message','',['class'=>'form-control','required','placeholder'=>'Votre message','row'=>'8','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</p>

                                </div>
                                {!! Form::submit("Envoyer ",['class'=>'primary-btn','value'=>'Envoyer','id'=>'submit-message'])!!}

                                <div id="msg" class="message"></div>
                            </div>

                    </div>
                </div>

                {!! Form::close()!!}
            </div>
        </section>
        <!-- End contact section -->

        <!-- Start footer section -->
        <footer class="footer-section section-gap-half">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 footer-left">
                        <a href="#">
                            <img src="img/logo-w.png" alt="">
                        </a>
                        <p class="copyright-text">&copy; 2020
                            <i class="fa fa-heart" aria-hidden="true"></i> By
                            Rismo
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <ul id="social">
                            <li>
                                <a target="_blank" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            
        </footer>
        <!-- End footer section -->

        <div class="scroll-top">
            <i class="ti-angle-up"></i>
        </div>
@endsection

