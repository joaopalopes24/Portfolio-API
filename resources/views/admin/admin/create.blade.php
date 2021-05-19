@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Cadastrar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.admin.store')}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Nome Completo" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="email" label="E-mail" type="email" placeholder="exemplo@exemplo" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="birthday" label="Data de Aniversário" type="date" feedback="true" required/>
      </div>
      <div class="row">
        <div class="col-xl-4 col-sm-6 form-group" style="margin-bottom: .7rem;">
          <p class="text-center" style="margin-bottom: 0;"><strong>--------- PERFIS DO USUÁRIO ---------</strong></p>
        </div>
      </div>
      @foreach($roles as $role)
        <x-checkbox-admin id="{{$role->name}}" name="roles[]"
          value="{{$role->name}}" label="{{$role->name}}"/>
      @endforeach
    </div>
    <x-footer-edit-create route="admin.admin.index"/>
  </form>
</div>
<!-- End Content -->
@endsection