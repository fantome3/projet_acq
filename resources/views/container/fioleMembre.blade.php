@extends('layouts.template')

@section('content')
<!-- Section -->
<section class="fullscreen" style="background-image: url(../images/pages/1.jpg)">
    <!--mettre image du kmr-->
    <div class="container container-fullscreen">
        <div class="text-middle">
            <div class="text-center m-b-30">
                <a href="index.html" class="logo">
                    <img src="../images/logo-dark.png" alt="Polo Logo">
                </a>
            </div>
            <div class="row">
                <div class="col-lg-5 center p-50 background-white b-r-6">

                    <h3>Se connecter au Compte</h3>
                    <form method="POST" action="{{ url('/login/confirmationFiole') }}">
                    <div class="form-group">
                            <label class="sr-only">User code</label>
                            <input type="text" name="code" class="form-control" placeholder="code fournit par votre parrain*">
                        </div>    
                    <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email*">
                        </div>
                        <div class="form-group m-b-5">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password*">
                        </div>
                        <div class="form-group m-b-5">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password confirme*">
                        </div>
                        <div class="text-left form-group">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                    <p class="small">Vous n'avez pas de compte? <a href="{{ url('/account') }}">Creer un Compte</a></p>
                    <p class="small">Vous avez déjà un parrain? <a href="{{ url('/fioleMembre') }}">Recuperer son Compte</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
@endsection