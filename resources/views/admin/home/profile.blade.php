@extends('layouts.admin')
@section('title', $nameOther)
@section('subtitle', $nameOther)
@section('caption', 'My Profile')
@section('content')
<!-- Home Content -->
<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Name" value="{{ Auth::user()->full_name}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Email" value="{{ Auth::user()->email}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="CPF" value="{{ Auth::user()->cpf}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" type="date" label="Birthday" value="{{ Auth::user()->birthday}}" disabled/>
      </div>
    </div>
    <x-footer-show route="admin.home.index" name1="Go to Home Page"/>
  </div>
</div>
<!-- End Content -->
@endsection