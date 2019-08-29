<!-- Topbar -->
<div id="topbar" class="topbar-transparent topbar-fullwidth dark d-none d-xl-block d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="top-menu">
                    <li><a href="#">Phone: +1 (418) 261-6698</a></li>
                    <li><a href="#">Email: djokojires@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <div class="social-icons social-icons-colored-hover">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: Topbar -->

<!-- Header -->
<header id="header" data-transparent="true" data-fullwidth="true" class="dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="{{ url('/') }}" class="logo" data-src-dark="{{asset('images/logo-dark.png')}}">
                    <img src="{{asset('images/logo.png')}}" alt="ACQ">
                </a>
            </div>
            <!--End: Logo-->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <div class="p-dropdown">
                            <a href="#"><i class="icon-flag11"></i></a>
                            <ul class="p-dropdown-content">
                                <li><a href="#">French</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu" class="light">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="dropdown"> <a href="#">Membres</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/bureau') }}">Membres du Bureau</a></li>
                                    <li><a href="{{ url('/adherantPassif') }}">Adhérents</a></li>
                                    <li><a href="{{ url('/adherantActif') }}">Participant</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="{{ url('/cotisation') }}">Mes Cotisations</a></li>
                            <li class="dropdown"> <a href="{{ url('/don') }}">Donation</a></li>
                            <li class="dropdown"> <a href="{{ url('/activiter') }}">ACTIVITÉS</a></li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->firstName }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->

<!-- Page title -->
<section id="page-title" class="text-light" data-vide-bg="../video/explore/explore" data-vide-options="position: 0% 50%">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a> </li>
                <li><a href="#">Page title</a> </li>
                <li class="active"><a href="#">Video background</a> </li>
            </ul>
        </div>
        <div class="page-title">
            <h1>Bienvenue à l'ACQ</h1>
            <span>Une association qui se veut pour vous et avec vous</span>
        </div>
    </div>
</section>
<!-- end: Page title -->

<!-- Page Menu -->
<!--portfolio-masonry-2.html, de la ligne 888 à 909. voir la gestion du content en bas de 909-->
<div class="page-menu menu-outline style-1">
    <div class="container">

        <nav>
            <ul>
                <li class="active"><a href="{{ url('/') }}">réunion prochaine</a></li>
                <li><a href="{{ url('/reunionPasser') }}">Visiter les anciennes réunions</a></li>
                <li><a href="{{ url('/status') }}">Consulter le Statut ACQ</a></li>
                <li><a href="{{ url('/newCanada') }}">Suis nouveau au Canada</a></li>
                <li><a href="">M'acceuillir à l'aéroport</a></li>
            </ul>
        </nav>

        <div id="pageMenu-trigger">
            <i class="fa fa-bars"></i>
        </div>

    </div>
</div>
<!-- end: Page Menu -->