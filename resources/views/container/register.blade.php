@extends('layouts.template')

@section('content')
<!-- Section -->
<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-8 center no-padding">

                <form class="form-transparent-grey" method="POST" action="{{ url('/register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Creer un nouveau Compte</h3>
                            <p>Toutes les élements avec * sont obligatoires</p>
                        </div>

                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Last Name</label>
                            <input type="text" name="prenom" placeholder="Last Name *" class="form-control">
                            @if ($errors->has('prenom'))
                                <span class="text-danger">{{ $errors->first('prenom') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">First Name</label>
                            <input type="text" name="nom" placeholder="First Name *" class="form-control">
                            @if ($errors->has('nom'))
                                <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password *" placeholder="Password" class="form-control">
                            <br>
                            <label class="sr-only">Confirm Password</label>
                            <input type="password" name="password1 *" placeholder="Confirm Password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-6 form-group"></div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Apartment, suite, unit etc.</label>
                            <input type="text" name="rue" placeholder="Numéro, Rue, Apartment." class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Town / City</label>
                            <input type="text" name="ville" placeholder="Ville / City *" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">State / County</label>
                            <input type="text" name="pays" placeholder="Pays / County *" class="form-control">
                            @if ($errors->has('pays'))
                                <span class="text-danger">{{ $errors->first('pays') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Postcode / Zip</label>
                            <input type="text" name="code" placeholder="Postcode / Zip" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Email</label>
                            <input type="email" name="email" placeholder="Email *" class="form-control" require>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Phone</label>
                            <input type="tel" name="phone" placeholder="Phone *" class="form-control">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-12 form-group">
                            <button class="btn" type="submit">Register New Account </button>
                            <button type="button" class="btn btn-danger m-l-10">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- end: Section -->
@endsection