@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Visualizar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-md-6" name="full_name" label="Nome Completo" value="{{$admin->full_name}}" disabled />
      <x-input class="col-md-6" name="email" label="Email" value="{{$admin->email}}" disabled />
    </div>
    <div class="row">
      <x-input class="col-md-6" label="CPF" value="{{$admin->cpf}}" disabled />
      <x-input class="col-md-6" name="birthday" label="Data de Aniversário" value="{{$admin->birthday}}" disabled />
    </div>
    <div class="row">
      <div class="col-12 mb-3">
        <p class="text-center mb-0"><strong>--------- PERFIS DO USUÁRIO ---------</strong></p>
      </div>
      @foreach($roles as $role)
      <x-checkbox-admin id="{{$role->name}}" label="{{$role->name}}" parameter="{{$admin->hasRole($role->id)}}" disabled />
      @endforeach
    </div>
  </div>
  <x-footer-show route="admin.admin.index" />
</div>
<!-- End Content -->
@endsection