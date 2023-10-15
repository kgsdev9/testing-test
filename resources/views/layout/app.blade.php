
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Examin - Education and LMS Template">

  <!-- ========== Page Title ========== -->
  <title>Bienvenue Sur Institut Roosvelet</title>

  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="ressources/img/favicon.png" type="image/x-icon">

  <!-- ========== Start Stylesheet ========== -->
  <link href="{{asset('ressources/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/font-awesome.min.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/flaticon-set.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/elegant-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/magnific-popup.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/owl.carousel.min.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/owl.theme.default.min.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/animate.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/css/bootsnav.css')}}" rel="stylesheet" />
  <link href="{{asset('ressources/style.css')}}" rel="stylesheet">
  <link href="{{asset('ressources/css/responsive.css')}}" rel="stylesheet" />
  <!-- ========== End Stylesheet ========== -->

  <!-- ========== Google Fonts ========== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i>
                               Abobo Akeikoi, Eglise Saint Marc
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                institut.ispr@gmail.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                (+225)08.19.23.82 / 56.56.59.75
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>


                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
<header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>

                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('ressources/img/logo.png')}}" class="logo" style="height:40px;"  alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="{{url('/')}}">Accueil</a>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Nos Filieres </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('bts.assisatant')}}">Assistanat de Direction</a></li>
                                <li><a href="{{route('bts.rhcom')}}">Ressources Humaines et Communication</a></li>
                                <li><a href="{{route('bts.fcgestion')}}">Finances Comptabilités et Gestion des Entreprises</a></li>
                                <li><a href="{{route('bts.commerciale')}}">Gestion commerciale</a></li>
                                <li><a href="{{route('bts.tourisme')}}">Tourisme Hôtelerie</a></li>
                                  <li><a href="{{route('bts.eletronique')}}">Systèmes Electroniques et Informatiques</a></li>
                                    <li><a href="{{route('bts.reseau')}}">Réseaux Informatiques et Télécommunications</a></li>
                                      <li><a href="{{route('bts.application')}}">Informatique Developpeur d'Application</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('login')}}">Mon Compte </a>

                        </li>

                        <li class="dropdown">
                            <a href="{{url('/news')}}" >Actualités</a>

                        </li>
                        <li>
                            <a href="{{url('/contact-us')}}">contactez-nous </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>


        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->


    @yield('content')
    <br><br>

   <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="{{asset('ressources/img/logo.png')}}" alt="Logo">
                            <p>
                                L’Institut Supérieur Polytechnique Roosevelt (ISPR) L’Institut Supérieur ISPR est un Etablissement d’Enseignement Supérieur animé par des Enseignants des Universités et Grandes Ecoles en collaboration avec des professionnels. ISPR est situé à Abidjan dans la commune d’abobo akekoi non loin de l’égliseCatholique Saint-Marc..

                            </p>
                            <p class="text-italic">

                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Entrer votre email" class="form-control" name="email">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Liens Utiles</h4>
                            <ul>
                                <li>
                                    <a href="#">Cours</a>
                                </li>
                                <li>
                                    <a href="#">Evenements</a>
                                </li>
                                <li>
                                    <a href="#">Nos Eleves</a>
                                </li>
                                <li>
                                    <a href="#">Nos Enseignants</a>
                                </li>
                                <li>
                                    <a href="#">Nos Formations</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Filieres</h4>
                            <ul>
                                <li>
                                    <a href="#">Filiere Industrielle</a>
                                </li>
                                <li>
                                    <a href="#">FIliere Tertiaire</a>
                                </li>
                                <li>
                                    <a href="#">Postuler au bts</a>
                                </li>
                                <li>
                                    <a href="#">Conditions D'admissions</a>
                                </li>
                                <li>
                                    <a href="#">Cours en ligne</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Adresse</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>Email <span><a href="mailto:support@validtheme.com">institutroosvelet.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i>
                                    <p>Emplacement <span> ABOBO SAINT MARC PRES DE L'EGLISE CATHOLIQUE</span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>HORAIRE D'OUVERTURE</h5>
                                <ul>
                                    <li> <span> Lundi  -Vendredi:  </span>
                                      <div class="pull-right">8H  - 18 H </div>
                                    </li>
                                    <li> <span> Samedi  - Dimanche :</span>
                                      <div class="pull-right"> fermé </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Tous Droits reservés à Insittut roosvelet</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">INSTITUT ROOSVELET</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('ressources/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('ressources/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ressources/js/equal-height.min.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.appear.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ressources/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('ressources/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ressources/js/wow.min.js')}}"></script>
    <script src="{{asset('ressources/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('ressources/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('ressources/js/count-to.js')}}"></script>
    <script src="{{asset('ressources/js/loopcounter.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('ressources/js/bootsnav.js')}}"></script>
    <script src="{{asset('ressources/js/main.js')}}"></script>

</body>
</html>
