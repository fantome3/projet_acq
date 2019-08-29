@extends('layouts.template')

@section('content')
<div class="container">
    <section>
        <!--Team members style 1-->
        <div class="heading-text heading-line text-center">
            <h4>Team members</h4>
        </div>
        <div class="row team-members team-members-circle m-b-40">
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="../images/team/6.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Ghislain Brice</h3>
                        <span>Le Président</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="../images/team/7.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Prendre ds la BD</h3>
                        <span>poste: BD</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="../images/team/8.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Emma Ross</h3>
                        <span>Software Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="../images/team/9.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Victor Loda</h3>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                <i class="far fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END: Team members style 1-->
    </section>
</div>
@endsection