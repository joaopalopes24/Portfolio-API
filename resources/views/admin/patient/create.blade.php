@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Cadastrar')
@section('content')
<!-- Home Content -->
<form class="needs-validation" action="{{route('admin.patient.store')}}" method="post" enctype="multipart/form-data" novalidate>
  @csrf
  <div class="callout callout-info">
    <div class="row">
      <img class="profile-user-img img-fluid img-circle" src="{{asset("storage/patient/userX.png")}}" alt="Foto de Perfil do Usuário">
      <x-input class="col-md-9" type="file" name="photo" label="Foto de Perfil" feedback="true"/>
    </div>
  </div>
  <div class="card card-secondary card-outline">
    <div class="card-body">
      <div class="row">
        <x-input class="col-md-5" name="full_name" label="Nome do Paciente" feedback="true" required/>
        <x-input class="col-md-4" name="mother_name" label="Nome da Mãe" feedback="true" required/>
        <x-input class="col-md-3" type="date" name="birthday" label="Data de Nascimento" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-md-4" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" feedback="true" required/>
        <x-input class="col-md-4" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000000000000000" feedback="true" required/>
        <x-input class="col-md-4" label="CEP" placeholder="SOMENTE NÚMEROS" data-mask="00000000" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-md-5" name="adress" label="Rua / Avenida" feedback="true" required/>
        <x-input class="col-md-3" type="number" name="number" label="Número" feedback="true" required/>
        <x-input class="col-md-4" name="complement" label="Complemento" feedback="true"/>
      </div>
      <div class="row">
        <x-input class="col-md-5" name="district" label="Bairro" feedback="true" required/>
        <x-input class="col-md-5" name="city" label="Cidade" feedback="true" required/>
        <x-select-state class="col-md-2" name="state_abbr" label="Estado" feedback="true" required/>
      </div>
    </div>
    <x-footer-edit-create route="admin.patient.index"/>
  </div>
</form>
<!-- End Content -->
@endsection