@extends('layouts.admin')
@section('title', $nameOther)
@section('subtitle', $nameOther)
@section('caption', 'Meu Perfil')
@section('content')
<!-- Home Content -->
<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Nome Completo" value="{{ Auth::user()->full_name}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Email" value="{{ Auth::user()->email}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="CPF" value="{{ Auth::user()->cpf}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" type="date" label="Data de Aniversário" value="{{ Auth::user()->birthday}}" disabled/>
      </div>
    </div>
    <x-footer-show route="admin.home.index" name1="Ir para Página Inicial"/>
  </div>
</div>
<!-- End Content -->
@endsection