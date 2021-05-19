@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Nome do Perfil" value="{{$patient->name}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Tipo do Perfil" value="{{$patient->guard_name}}" disabled/>
    </div>
  </div>
  <x-footer-show route="admin.patient.index"/>
</div>
<!-- End Content -->
@endsection