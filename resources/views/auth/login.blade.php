@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
  <p class="login-box-msg">Entre para acessar sua conta.</p>
  <form class="needs-validation" action="{{ route('login') }}" method="post" novalidate>
    @csrf
    <x-auth-input icon="fas fa-envelope" type="email" name="email" placeholder="E-mail" value="{{old('email')}}" feedback="true" required />
    <x-auth-input icon="fas fa-lock" type="password" name="password" placeholder="Senha" minlength="8" feedback="true" required />
    <x-auth-button route="password.request" name1="Entrar" name2="Esqueceu sua senha?" />
  </form>
</div>
<!-- End Content -->
@endsection