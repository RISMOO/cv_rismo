@extends('layouts.app')



@section('content')

<!-- Start header section -->


        <!-- Preloader -->

        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    <!-- Start page-top-banner section -->
    <section class="banner-section relative section-gap-full" id="banner-section">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 banner-left">
                    <h1 class="text-uppercase">BIENVENU<hr> SUR MON SITE</h1>
                  <p> Bonjour,fraichement diplomé,j'ai créé ce site afin de mettre en pratique mes connaissances acquises lors de ma formation.Il sera développé en Laravel pour la partie Back-end et en Vuejs pour le Front-end</p>
                    <!--a class="video-btn primary-btn" href="about-us.html">About More</a-->
                </div>
                <div class="col-md-6 banner-right text-center">
                    <img class="rounded-circle" src="{{asset('image/screen1.png')}}" alt="">
                    <div class=zoom>
                        <div class=image>
<a href="{{asset('images/Titre.jpg')}}"><img class="img-fluid z-depth-2 rounded" src="{{asset('images/Titre.jpg')}}" alt="developpeur web"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave">
            <svg class="nectar-shape-divider" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
                preserveAspectRatio="none">
                <path d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path>
                <path d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path>
                <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
            </svg>
        </div>
    </section>
    <!-- End about-top-banner section -->
    <section class="portfolio-section section-gap-full" id="section-portfolio">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Mes Projets</h2>
                <p class="text-center">Quelques projets de ma conception</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 cl">
                            <div class="single-portfolio">
                                <img alt="" class="img-fluid" src="{{asset('images/virtualbox.jpg')}}">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Projet1</h5>
                                    </a>
                                    <span class="post">Virtual Box</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 cl">
                            <div class="single-portfolio">
                                <img alt="" class="img-fluid" src="{{asset('images/laravelvuejs.png')}}">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">projet2</h5>
                                    </a>
                                    <span class="post">Laravel & Vuejs</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-portfolio">
                                <img alt="" class="img-fluid" src="{{asset('images/thumb2.png')}}">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Projet de stage</h5>
                                    </a>
                                    <span class="post">Laravel et Voyager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-portfolio">
                                <img alt="" class="img-fluid" src="{{asset('images/cv.png')}}">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Projet2</h5>
                                    </a>
                                    <span class="post">Mon CV</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-portfolio">
                                <img alt="" class="img-fluid" src="{{asset('images/lafleur.png')}}">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Projet3</h5>
                                    </a>
                                    <span class="post">La fleur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio section -->

    <!-- Start blog-lists section -->
    <section class="blog-lists-section section-gap-full" id="section-blog">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">A propos</h2>
                <p class="text-center">Quelques infos</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="post-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{asset('images/plage.jpg')}}" alt="">
                        </div>
                        <div class="post-details">
                            <!--
                            <ul class="tags">
                                <li><a href="#">Learn</a></li>
                                <li><a href="#">Dream</a></li>
                            </ul>
                        -->
                            <a href="single-blog.html">
                                <h1>A propos de moi </h1>
                            </a>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ut nisi fugiat vero libero magnam aliquid quos corporis! At, labore numquam. Ratione esse unde illo harum adipisci officia voluptate nulla.
                            </p>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga.
                            </p>
                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod teminc ididunt ut labore et dolore.Lorem ipsum
                                    dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod temporSed ut perspiciatis unde omnis natus error sit voluptatem accusantium
                                    doloremque laudantium.</p>
                            </blockquote>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt.

                                On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee the pain and trouble that are bound to ensue; and equal blame
                                belongs to those who fail in their duty through weakness
                            </p>
                        </div>
                    </div>
                    <div class="comment-wrap" id="section-message">


                        <h3>Vos Messages</h3>


                        @foreach ($messages as $message)
                        <div class="media comments">
                            <img class="mr-3 z-depth-3 rounded" src="{{asset('images/moia.png')}}" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="mt-0">{{$message->nom}}</h5>
                                <p>
                                   {{$message->message}}
                                </p>
                                <div class="comment-buttons">
                                    <a href="#" class="primary-btn black-btn">Répondre</a>
                                </div>
                                <div class="media mt-3 replay-comment">
                                    <a class="pr-3" href="#">
                                        <img src="{{asset('images/moia.png')}}" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0"></h5>
                                        <p>
                                        </p>
                                        <div class="comment-buttons">
                                            <a href="#" class="primary-btn black-btn">Répondre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                        <div class="media comments">
                            <img class="mr-3 img-thumbnail" src="{{asset('images/moia.png')}}" width="2rem" height="2rem" alt="profil">
                            <div class="media-body">
                                <h5 class="mt-0"></h5>
                                <p>
                                </p>
                                <div class="comment-buttons">
                                    <a href="#" class="primary-btn black-btn">Répondre</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>



                    <div class="comment-wrap" id="section-contact">

                    <h3>Laisser un message</h3>
                    <div class="form-group">
                  {!! Form::open(['action'=> 'MessageController@store','method'=>'POST']) !!}

                        <div class="row form-col-wrap">
                            <div class="col-lg-6 form-cols">
                                <div class="form-group">
                                    <h5 class="text-muted">{{ Form::label('nom','Nom')}}</h5>
                                     <p>{{Form::text('nom','',['class'=>'form-control border text-muted','placeholder'=>'Votre nom','required'])}}</p>
                                     </div>
                                </div>
                            <div class="col-lg-6 form-cols">
              <div class="form-group">
         <h5 class="text-muted">{{Form::label('email','Email')}}</h5>
        <p>{{Form::text('email','',['class'=>'form-control border text-muted','placeholder'=>'Votre Email','required'])}}</p>
      </div>
            </div>
                 </div>
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <h5 class="text-muted">{{ Form::label('Votre message','Votre message')}}</h5>
                                   <p> {{ Form::textarea('message','',['class'=>'form-control border text-dark ','placeholder'=>'Votre message','required'])}}</p>
                                </div>
                                <p>{!! Form::submit("Envoyer ",['class'=>'primary-btn black text-center border'])!!}
                                </p><br>
                              {!! Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
                        <div class="single-widget search-widget">
                            <h4 class="widget-title">Rechercher ici</h4>
                            <div class="sidebar-form">
                                <form action="#" class="relative">
                                    <input type="text" placeholder="Recherche..."  onfocus="this.placeholder=''" onblur="this.placeholder='Search'">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="single-widget social-widget text-center">
                            <h4 class="widget-title">Réseaux sociaux</h4>
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/">
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
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/m-s-91700619b/">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget banner-widget">
                            <img class="img-fluid" src="{{asset('images/banner.jpg')}}" alt="">
                        </div>
                        <div class="single-widget tags-widget">
                            <h4 class="widget-title">Catégories</h4>
                            <ul>
                                <!--
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Gadget</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Gaming</a></li>
                                -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-lists section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>
@endsection

