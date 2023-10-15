@extends('layout.apps')


@section('content')

<div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{{route('register')}}" id="register-form" class="white-popup-block" method="POST">
                        @csrf
                        <div class="col-md-4 login-social">


                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



                        </div>

                        <div class="col-md-8 login-custom">
                            <h4>INSCRIPTION SUR INSTITUT ROOSVELET</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Entrer votre nom d'utilisateurl*" type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre Adresse E-mail*" type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre mot de passe*" type="password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirmer Votre Mot de passe*" type="password" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                      S'inscrire
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Vous avez deja un compte ? <a href="{{route('login')}}">Connexion</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
