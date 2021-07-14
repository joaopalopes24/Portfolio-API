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
      <img class="profile-user-img img-fluid img-circle" src="{{asset("plugins/images/userX.png")}}" alt="Foto de Perfil do Usuário">
      <x-input-file class="col-md-5" name="photo" label="Foto de Perfil (preferencialmente fotos quadradas)" feedback="true" />
      <div class="col-md-1 offset-md-4"></div>
    </div>
  </div>
  <div class="card card-secondary card-outline">
    <div class="card-body">
      <div class="row">
        <x-input class="col-md-5" name="full_name" label="Nome do Paciente" feedback="true" value="{{old('full_name')}}" required />
        <x-input class="col-md-4" name="mother_name" label="Nome da Mãe" feedback="true" value="{{old('mother_name')}}" required />
        <x-input class="col-md-3" type="date" name="birthday" label="Data de Nascimento" value="{{old('birthday')}}" feedback="true" required />
      </div>
      <div class="row">
        <x-input class="col-md-4" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" feedback="true" value="{{old('cpf')}}" required />
        <x-input class="col-md-4" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000000000000000" feedback="true" value="{{old('cns')}}" required />
        <x-input class="col-md-4" label="CEP" placeholder="SOMENTE NÚMEROS" data-mask="00000-000" onblur="pesquisacep(this.value);" feedback="true" value="{{old('cep')}}" required />
      </div>
      <div class="row">
        <x-input class="col-md-5" name="adress" label="Rua / Avenida" feedback="true" value="{{old('adress')}}" required />
        <x-input class="col-md-3" type="number" name="number" label="Número" feedback="true" value="{{old('number')}}" required />
        <x-input class="col-md-4" name="complement" label="Complemento" feedback="true" value="{{old('complement')}}" />
      </div>
      <div class="row">
        <x-input class="col-md-5" name="district" label="Bairro" feedback="true" value="{{old('district')}}" required />
        <x-input class="col-md-5" name="city" label="Cidade" feedback="true" value="{{old('city')}}" required />
        <x-select-state class="col-md-2" name="state_abbr" label="Estado" feedback="true" value="{{old('state_abbr')}}" required />
      </div>
    </div>
    <x-footer-edit-create route="admin.patient.index" />
  </div>
</form>
<!-- End Content -->
@endsection

@push('scripts')
{{-- Esse Script com integração do ViaCEP foi pegado na própria documentação do ViaCEP com pequenas alterações --}}
<script src="{{asset('plugins/dist/js/viacep.js')}}"></script>
@endpush