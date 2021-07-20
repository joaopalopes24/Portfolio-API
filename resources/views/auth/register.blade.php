@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
    <p class="login-box-msg">Entre para acessar sua conta.</p>
    <form class="needs-validation" action="{{ route('register') }}" method="post" novalidate>
        @csrf
        <x-auth-input icon="fas fa-font" type="text" name="full_name" placeholder="Nome Completo" value="{{old('full_name')}}" required />
        <x-auth-input icon="far fa-id-card" type="text" name="cpf" placeholder="CPF" data-mask="000.000.000-00" value="{{old('cpf')}}" required />
        <x-auth-input icon="fas fa-calendar-day" type="date" name="birthday" placeholder="Data de Nascimento" value="{{old('birthday')}}" required />
        <x-auth-input icon="fas fa-envelope" type="email" name="email" placeholder="E-mail" value="{{old('email')}}" required />
        <x-auth-input icon="fas fa-lock" type="password" name="password" placeholder="Senha" minlength="8" required />
        <x-auth-input icon="fas fa-lock" type="password" name="password_confirmation" placeholder="Confirmar Senha" minlength="8" required />
        <x-checkbox class="custom-switch" name="view_password" label="Mostrar Senha" onclick="viewDatePassword()" />
        <x-auth-button route="login" name1="Criar conta" name2="Tela inicial" />
    </form>
</div>
<!-- End Content -->
@endsection