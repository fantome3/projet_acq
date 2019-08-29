@extends('layouts.template')

@section('content')
<!-- Page Content -->
<section id="page-content" class="m-0 p-0">
    <div class="m-0">
        <div class="row">
            <div class="p-20"></div>
            <!-- Sidebar,  ******************remplacer ceci par la parge évènement****************-->
            <div class="sidebar sticky-sidebar col-lg-4 p-100" style="background-image:url(../images/parallax/40.jpg); background-size: cover; background-position: center center;">
                <div class="page-title">
                    <h3 class="text-light">évènement RECENT</h3>
                </div>
            </div>

            <div class="p-20"></div>

            <div class="content col-lg-7 p-t-10">
                <h4>Nos cotisations actuelles ==></h4>
                <div class="row">
                    <div class="col-lg-9">
                        <label class="p-checkbox">
                            <span>Je payes ma RPN</span>
                            <input type="checkbox" name="check" id="rpn">
                            <span class="p-checkbox-style"></span>
                        </label>
                    </div>
                    <div id="texte1">
                        <p>la rpn coute 10$CAD, et il snd ndnkd dnfkdbnfd feif eienfienf efineifne </p>
                    </div>
                </div>
                <div class="line"></div>
                <div class="row">
                    <div class="col-lg-9">
                        <label class="p-checkbox">
                            <span>Je payes mon member ship</span>
                            <input type="checkbox" name="check" id="member">
                            <span class="p-checkbox-style"></span>
                        </label>
                    </div>
                    <div id="texte2">
                        <p>la rpn coute 25$CAD, et il snd ndnkd dnfkdbnfd feif eienfienf efineifne </p>
                    </div>
                </div>
                <div class="col-lg-9 m-t-60">
                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In
                    iaculis viverra neque, ac ele molestie id viverra aifend ante lobortis id. In viverra
                    ipsum
                    stie. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra
                    neque,
                    ac ele molestie id viverra aifend ante lobortis id. In viverra ipsum. </div>
            </div>

        </div>
    </div>
</section>
@endsection