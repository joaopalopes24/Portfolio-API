@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-md-5 form-group" name="full_name" label="Nome do Paciente" value="{{$patient->full_name}}" disabled/>
      <x-input class="col-md-4 form-group" name="mother_name" label="Nome da Mãe" value="{{$patient->mother_name}}" disabled/>
      <x-input class="col-md-3 form-group" type="date" name="birthday" label="Data de Nascimento" value="{{$patient->birthday}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-md-4 form-group" label="CPF" value="{{$patient->cpf}}" disabled/>
      <x-input class="col-md-4 form-group" label="CNS" value="{{$patient->cns}}" disabled/>
      <x-input class="col-md-4 form-group" label="CEP" value="{{$patient->cep}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-md-5 form-group" name="adress" label="Rua / Avenida" value="{{$patient->adress}}" disabled/>
      <x-input class="col-md-3 form-group" type="number" name="number" label="Número" value="{{$patient->number}}" disabled/>
      <x-input class="col-md-4 form-group" name="complement" label="Complemento" value="{{$patient->complement}}" feedback="true"/>
    </div>
    <div class="row">
      <x-input class="col-md-5 form-group" name="district" label="Bairro" value="{{$patient->district}}" disabled/>
      <x-input class="col-md-5 form-group" name="city" label="Cidade" value="{{$patient->city}}" disabled/>
      <x-input class="col-md-2 form-group" name="state_abbr" label="Estado" value="{{$patient->state_abbr}}" disabled/>
    </div>
  </div>
  <x-footer-show route="admin.patient.index"/>
</div>
<!-- End Content -->
@endsection