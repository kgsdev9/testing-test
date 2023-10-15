@extends('layout.app')

@section('content')

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-top-heading text-normal heading-weight-600 auto-height">
        <div id="bootcarousel" class="carousel slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light">
                <div class="item active">
                    <div class="box-table bg-fixed shadow dark" style="background-image: url(ressources/img/slide-responsive.jpg);">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Consulter nos divers formations et formations   <span>qualifiantes</span></h1>

                                            <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="https://wa.me/+2250708192382?text=J'aimerais avoir plus de renseignement sur vos ecole et vos tarifs BTS">Se Renseigner par WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-table shadow bg-fixed dark" style="background-image: url(ressources/img/carousel-1.jpg);">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">PREPARER VOTRE BTS EN TOUTE <span>TRANQUILITE</span> AVEC NOUS </h1>

                                            <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="https://wa.me/+2250708192382?text=J'aimerais avoir plus de renseignement sur vos ecole et vos tarifs BTS">Se Renseigner par WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>



                <div class="item">
                    <div class="box-table bg-fixed shadow dark" style="background-image: url(ressources/img/carousel-2.jpg);">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Candidater à notre formule  <span>BTS A PARTIR DE 12 000 FCFA </span></h1>
                                            <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="https://wa.me/+2250708192382?text=J'aimerais avoir plus de renseignement sur vos ecole et vos tarifs BTS">Se Renseigner par WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Features Latest Post
    ============================================= -->

    <div class="about-area default-padding">
      <div class="container">
          <div class="row">
              <div class="about-info">
                  <div class="col-md-6 thumb">
                      <img src="{{asset('ressources/img/global.png')}}" alt="Thumb">
                  </div>
                  <div class="col-md-6 info">
                      <h5>Introduction</h5>
                      <h2>Bienvenue Sur institut de formation  roosvelet </h2>
                      <p>
                        Désireux d’être candidat au BTS 2022 à titre LIBRE ou OFFICIEL, nous vous proposons un service couplé à une assistance optimale incluant la prise en compte de votre candidature (pour toute filière) associer à la perspective de cours de renforcement de vos capacités en soir ou autre , avec d’autres écoles partenaires à Abidjan .
                        DOSSIERS A FOURNIR
                        -Une photocopie de votre CNI ou Attestation d’identité ou passeport en cours de validité
                        -Une copie légalisée de votre BAC ou BT.
                        -Pour les non bacheliers, avoir une autorisation originale d’inscription en année préparatoire (AP)
                        - Une copie originale de votre extrait de naissance
                        -Deux photos couleurs issues du même tirage
                        -Une fiche d’inscription BTS 2022 (à imprimer en ligne 10.000fr)
                        -Les frais des cours de préparation BTS sont à la charge du candidat
                        * les frais de dossier pour l’assistance s’élèvent à 25.000fr
                        MONTANT TOTAL : 35.000 Fr CFA*

                        Les candidats officiels concernés par la somme de 12mil TTC doivent respecter les 3 conditions suivantes :
                        -Avoir eu le BAC en 2019
                        -Avoir été orienté dans une grande école ou université privée
                        -Avoir présenté le BTS 2021
                        BUREAU : COCODY VALLON, RIVIERA 3 CAP NORD, ABOBO SOGEPHIA ET AKEIKOI
                        Pour tout renseignement complémentaire :
                        Mr Brice Herve TIE
                        0708192382 / 0556565975

                      </p>

                      <a href="#" class="btn btn-dark border btn-md">Consulter</a>
                  </div>
              </div>
              <div class="seperator col-md-12">
                  <span class="border"></span>
              </div>

          </div>
      </div>
  </div>







    <!-- End Our Features & Latest Post -->

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses bg-gray circle carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Nos filieres </h2>
                        <p>
                        Consulter toutes nos filieres BTS auxquelles vous pouver postuler, bénéficier de nombreuses avantages telles que les supports de cours gratuits , un assistance personelle , et une suivie.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->

                        @foreach ($article as $value )
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('uploads/articles/'.$value->image)}}" alt="Thumb">
                                </a>

                            </div>
                            <div class="info">
                                <h4><a href="#"> {{$value->name_article }}</a></h4>

                                <p>
                                   {{Str::limit($value->description, 90)}}
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> ISPR
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->


    <div class="popular-courses default-padding without-carousel">
      <div class="container">
          <div class="row">
              <div class="site-heading text-center">
                  <div class="col-md-8 col-md-offset-2">
                      <h2>RETROUVER TOUTES NOS ACTUALITES </h2>
                      <p>
                          Suivez l'ensemble des actualités de l'education superieure  et de la formation scientifique
                      </p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="popular-courses-items">

                  <!-- Single Item -->

                  @foreach (  $twoarticle as $value )
                  <div class="col-md-4 col-sm-6 equal-height" style="height: 643px;">
                      <div class="item">
                          <div class="thumb">
                              <a href="#">
                                  <img src="{{asset('uploads/articles/'.$value->image)}}" alt="Thumb">
                              </a>

                          </div>
                          <div class="info">
                              <h4><a href="#">{{$value->name_article}}</a></h4>
                              <p>
                                {{Str::limit($value->description, 80)}}
                              </p>
                              <div class="bottom-info">
                                  <ul>
                                      <li>
                                          <i class="fas fa-user"></i> ISPR
                                      </li>
                                  </ul>
                                  <a href="#">Consulter </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Item -->
                  @endforeach




                  <!-- End Single Item -->

                  <div class="col-md-12 button text-center">
                      <a class="btn btn-dark effect circle btn-md" href="#">Consulter plus d'actualités</a>
                  </div>

              </div>
          </div>
      </div>
  </div>





@endsection
