@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Cadastrar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.patient.store')}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-md-5 form-group" name="full_name" label="Nome do Paciente" feedback="true" required/>
        <x-input class="col-md-4 form-group" name="mother_name" label="Nome da Mãe" feedback="true" required/>
        <x-input class="col-md-3 form-group" type="date" name="birthday" label="Data de Nascimento" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-md-4 form-group" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" feedback="true" required/>
        <x-input class="col-md-4 form-group" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000000000000000" feedback="true" required/>
        <x-input class="col-md-4 form-group" label="CEP" placeholder="SOMENTE NÚMEROS" data-mask="00000000" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-md-5 form-group" name="adress" label="Rua / Avenida" feedback="true" required/>
        <x-input class="col-md-3 form-group" type="number" name="number" label="Número" feedback="true" required/>
        <x-input class="col-md-4 form-group" name="complement" label="Complemento" feedback="true"/>
      </div>
      <div class="row">
        <x-input class="col-md-5 form-group" name="district" label="Bairro" feedback="true" required/>
        <x-input class="col-md-5 form-group" name="city" label="Cidade" feedback="true" required/>
        <x-input class="col-md-2 form-group" name="state_abbr" label="Estado" feedback="true" required/>
      </div>
    </div>
    <x-footer-edit-create route="admin.patient.index"/>
  </form>
</div>
<!-- End Content -->
@endsection