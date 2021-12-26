@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')

<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg')  }}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Registro</h4>
            {{-- <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                <i class="fa fa-google-plus"></i>
                </a>
            </div> --}}
            </div>
            <p class="description text-center">Ingresa tus datos</p>
            <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name..." name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">mail</i>
                    </span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">C</i>
                        </span>
                    </div>
                    <input placeholder="Password..." id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">CP</i>
                        </span>
                    </div>
                    <input placeholder="Confirm Password..." id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                </div>
            </div>
            <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Registrarse</a>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
@include('includes.footer')
</div>

@endsection
