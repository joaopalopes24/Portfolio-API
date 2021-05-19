@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Edit')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.patient.update',$patient->id)}}" method="post" novalidate>
    @method('put')
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-md-5" name="full_name" label="Nome do Paciente" value="{{$patient->full_name}}" feedback="true" required/>
        <x-input class="col-md-4" name="mother_name" label="Nome da Mãe" value="{{$patient->mother_name}}" feedback="true" required/>
        <x-input class="col-md-3" type="date" name="birthday" label="Data de Nascimento" value="{{$patient->birthday}}" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-md-4" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="{{$patient->cpf}}" feedback="true" required/>
        <x-input class="col-md-4" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000000000000000" value="{{$patient->cns}}" feedback="true" required/>
        <x-input class="col-md-4" label="CEP" placeholder="SOMENTE NÚMEROS" data-mask="00000000" value="{{$patient->cep}}" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-md-5" name="adress" label="Rua / Avenida" value="{{$patient->adress}}" feedback="true" required/>
        <x-input class="col-md-3" type="number" name="number" label="Número" value="{{$patient->number}}" feedback="true" required/>
        <x-input class="col-md-4" name="complement" label="Complemento" value="{{$patient->complement}}" feedback="true"/>
      </div>
      <div class="row">
        <x-input class="col-md-5" name="district" label="Bairro" value="{{$patient->district}}" feedback="true" required/>
        <x-input class="col-md-5" name="city" label="Cidade" value="{{$patient->city}}" feedback="true" required/>
        <x-select-state class="col-md-2" name="state_abbr" label="Estado" value="{{$patient->state_abbr}}" feedback="true" required/>
      </div>
    </div>
    <x-footer-edit-create route="admin.patient.index"/>
  </form>
</div>
<!-- End Content -->
@endsection