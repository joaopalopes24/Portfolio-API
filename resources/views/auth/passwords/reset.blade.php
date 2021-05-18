@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
  <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
  <form class="needs-validation" action="{{ route('password.update') }}" method="post" novalidate>
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <x-auth-input icon="fas fa-envelope" type="email" placeholder="Email" value="{{ $email ?? old('email') }}" feedback="true" required/>
    <x-auth-input icon="fas fa-lock" type="password" placeholder="Password" minlength="8" feedback="true" required/>
    <x-auth-input icon="fas fa-lock" type="password" name="password_confirmation" placeholder="Confirm Password" minlength="8" feedback="true" required/>
    <x-auth-button name1="Change Password"/>
  </form>
</div>
<!-- End Content -->
@endsection