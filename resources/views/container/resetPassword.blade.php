@extends('layouts.template')

@section('content')
<!-- Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-center">Mot de passe oublier?</h2>
                <form class="form-validation">
                    <div class="form-group">
                        <p class="center">Entrer votre adresse Email pour re-initialiser votre passe</p>
                        <input type="email" name="email" class="form-control form-white placeholder" placeholder="Enter your email..." required>
                    </div>
                    <div class="text-center">
                        <button id="pass" type="button" class="btn">Creer un nouveau pass</button>
                    </div>
                </form>
                <div id="texte1">
                    <h4> Vous avez recu un mail pour la reinitialisation de votre mot de passe</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
@endsection