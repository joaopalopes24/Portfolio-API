@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
    <p class="login-box-msg">Entre para acessar sua conta.</p>
    <form class="needs-validation" action="{{ route('login') }}" method="post" novalidate>
        @csrf
        <x-auth-input icon="fas fa-envelope" type="email" name="email" placeholder="E-mail" value="{{old('email')}}" feedback="true" required />
        <x-auth-input icon="fas fa-lock" type="password" name="password" placeholder="Senha" minlength="8" feedback="true" required />
        <x-checkbox class="custom-switch" name="view_password" label="Mostrar Senha" onclick="viewDatePassword()" />
        <x-checkbox class="custom-switch" name="remember" label="Lembre de mim" />
        <x-auth-button route="password.request" name1="Entrar" name2="Esqueceu sua senha?" />
    </form>
    <p class="my-1">
        <a href="{{ route('register') }}">Criar uma nova conta</a>
    </p>
    <div class="social-auth-links text-center">
        <hr>
        <a target="_blank" href="{{ route('oauth','github') }}" class="btn btn-secondary">
            <i class="fab fa-github"></i>
        </a>
        <a target="_blank" href="{{ route('oauth','google') }}" class="btn btn-danger">
            <i class="fab fa-google"></i>
        </a>
    </div>
</div>
<!-- End Content -->
@endsection