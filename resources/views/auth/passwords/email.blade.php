@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
  <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
  <form class="needs-validation" action="{{ route('password.email') }}" method="post" novalidate>
    @csrf
    <x-auth-input icon="fas fa-envelope" type="email" placeholder="Email" feedback="true" required/>
    <x-auth-button route="login" name1="Request new password" name2="Login Page"/>
  </form>
</div>
<!-- End Content -->
@endsection