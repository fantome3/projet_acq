<!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row gap-y">

                <div class="col-md-6 col-xl-4">
                    <p><a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="logo"></a></p>
                    <h2>Ensemble c'est possible</h2>
                </div>

                <div class="col-6 col-md-3 col-xl-2">
                    <!-- Footer widget area 1 -->
                    <div class="widget">
                        <h4>Intégration</h4>
                        <ul class="list">
                            <li><a href="#">Future arrivant au Canada.</a></li>
                            <li><a href="#">Nouveau arrivé au Canada.</a></li>
                            <li><a href="#">Nouveau dans la province Québec.</a></li>
                            <li><a href="#">Nouveau dans la ville Québec.</a></li>
                            <li><a href="#">Autres associations.</a></li>
                        </ul>
                    </div>
                    <!-- end: Footer widget area 1 -->
                </div>

                <div class="col-6 col-md-3 col-xl-2">
                    <!-- Footer widget area 2 -->
                    <div class="widget">
                        <h4>Adhérent</h4>
                        <ul class="list">
                            <li><a href="#">Consulter ma RPN</a></li>
                            <li><a href="#">payer mes cotisations</a></li>
                            <li><a href="#">Pourquoi avoir la RPN?</a></li>
                            <li><a href="{{ url('/don') }}">faire un Don</a></li>
                            @if(Session::has('user'))
                                <li><a href="{{ url('/sign') }}">se Connecter</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- end: Footer widget area 2 -->
                </div>

                <div class="col-6 col-md-6 col-xl-2">
                    <!-- Footer widget area 3 -->
                    <div class="widget">
                        <h4>À propos de nous</h4>
                        <ul class="list">
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/status') }}">Nos statuts</a></li>
                            <li><a href="{{ url('/bureau') }}">Membre du bureau</a></li>
                        </ul>
                    </div>
                    <!-- end: Footer widget area 3 -->
                </div>

                <div class="col-6 col-md-6 col-xl-2">>
                    <!-- Social icons -->
                    <h5>FOLLOW US</h5>
                    <div class="social-icons social-icons-colored social-icons-rounded float-left">
                        <ul>
                            <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- end: Social icons -->
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">

            <div class="copyright-text text-center">&copy; 2019 projet realisé pour ACQ par @fantome.
                All Rights Reserved.
            </div>

        </div>
    </div>
</footer>
<!-- end: Footer -->