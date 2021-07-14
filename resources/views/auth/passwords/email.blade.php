@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
  <p class="login-box-msg">Você esqueceu sua senha? Aqui você pode facilmente recuperar uma nova senha.</p>
  <form class="needs-validation" action="{{ route('password.email') }}" method="post" novalidate>
    @csrf
    <x-auth-input icon="fas fa-envelope" type="email" name="email" placeholder="E-mail" feedback="true" required />
    <x-auth-button route="login" name1="Requerir nova senha" name2="Tela inicial" />
  </form>
</div>
<!-- End Content -->
@endsection