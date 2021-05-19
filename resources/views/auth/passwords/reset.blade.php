@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
  <p class="login-box-msg">Você está a apenas um passo de sua nova senha, recupere sua senha agora.</p>
  <form class="needs-validation" action="{{ route('password.update') }}" method="post" novalidate>
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <x-auth-input icon="fas fa-envelope" type="email" name="email" placeholder="E-mail" value="{{ $email ?? old('email') }}" feedback="true" required/>
    <x-auth-input icon="fas fa-lock" type="password" name="password" placeholder="Senha" minlength="8" feedback="true" required/>
    <x-auth-input icon="fas fa-lock" type="password" name="password_confirmation" placeholder="Confirmar Senha" minlength="8" feedback="true" required/>
    <x-auth-button name1="Alterar Senha"/>
  </form>
</div>
<!-- End Content -->
@endsection