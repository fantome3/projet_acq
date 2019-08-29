@extends('layouts.template')

@section('content')
<!-- CONTENT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Get In Touch</h3>
                <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                <div class="m-t-30">
                    <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>

                        <div class="form-group">
                            <script src="https://www.google.com/recaptcha/api.js"></script>
                            <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                        </div>


                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Address & Map</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo Office</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                </div>

                <!-- Google map sensor -->
                <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
                <div class="map m-t-30" data-map-address="Melburne, Australia" data-map-zoom="10" data-map-icon="../images/markers/marker2.png" data-map-type="ROADMAP"></div>
                <!-- Google map sensor -->

            </div>
        </div>
    </div>
</section>
<!-- end: CONTENT -->
@endsection