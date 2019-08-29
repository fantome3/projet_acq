@extends('layouts.template')

@section('content')
<!-- Content -->
<section id="page-content">
            <div class="container">
                <h3>Évènements à venir</h3>
                <!-- Carousel slider, j'ai utilser portfolio-masonry-2 et portfolio-slider-3-title-desc-->
                <div class="carousel m-b-20 dots-inside dots-dark arrows-visible arrows-dark" data-items="1"
                    data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                    data-autoplay-timeout="1500">
                    <a href="portfolio-page-particles.html"><img src="../images/portfolio/80l.jpg" alt=""></a>
                    <a href="portfolio-page-particles.html"><img src="../images/portfolio/81l.jpg" alt=""></a>
                    <a href="portfolio-page-particles.html"><img src="../images/portfolio/82l.jpg" alt=""></a>
                </div>
                <!-- Carousel slider -->
                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20">

                    <!-- portfolio item  *************faire une boucle foraech ici pour prendre toutes les vidéo dans la BD -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="post-video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/dA8Smj5tZOQ"
                                    frameborder="0" allowfullscreen></iframe>
                                <span class="post-meta-category"><a href="">Video</a></span>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>BBQ été 2019</h3>
                                    <span>Graphics</span>
                                    <p>organiser par JIres, a réunit 5 équipes(k,m,q,..) et le vainqueur vu moi</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true"
                                    data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                    data-autoplay-timeout="1500">
                                    <a href="#"><img src="../images/portfolio/64.jpg" alt=""></a>
                                    <a href="#"><img src="../images/portfolio/70.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Towel World</h3>
                                    <span>Graphics</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>
        </section>
@endsection