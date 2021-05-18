@extends('layouts.template')
@section('content')
<!-- Home Content -->
<div class="card-body">
  <p class="login-box-msg">Sign in to start your session</p>
  <form class="needs-validation" action="{{ route('login') }}" method="post" novalidate>
    @csrf
    <x-auth-input icon="fas fa-envelope" type="email" placeholder="Email" value="{{old('email')}}" feedback="true" required/>
    <x-auth-input icon="fas fa-lock" type="password" placeholder="Password" minlength="8" feedback="true" required/>
    <x-auth-button route="password.request" name1="Sign In" name2="I forgot my password"/>
  </form>
</div>
<!-- End Content -->
@endsection