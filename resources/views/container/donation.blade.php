@extends('layouts.template')

@section('content')
<!-- Content se referer au fichier home-blog-v5 ligne les plus importantes 1092 et 1178-->
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- post content -->
            <div class="content col-lg-9">
                <!-- Post item YouTube-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
                            <span class="post-meta-category"><a href="">Video</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                    Comments</a></span>
                            <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                            <h2><a href="#">YouTube Video, this is a example post with YouTube</a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                            <a href="#" class="item-link">Read More </a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item YouTube-->
                <div class="text-center mt-5" data-animate="rotateInDownLeft" data-animation-delay="2000">
                    <h3 class="font-weight-light">Envoyer votre Don par <span>interact</span> à l'adresse mail:
                        <b>
                            <span class="text-rotator">ACQ_JE_TE_FAIS_UN_DON@gmail.com</span></b>
                    </h3>
                </div>
            </div>
            <!-- end: post content -->

            <!-- Sidebar-->
            <div class="sidebar col-lg-3">
                <!--Tabs with Posts-->
                <div class="widget ">
                    <h3>Pourquoi je dois faire ce DON</h3>
                    <p>explication de l'importance de faire un don</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection