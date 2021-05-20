@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Edit')
@section('content')
<!-- Home Content -->
<form class="needs-validation" action="{{route('admin.patient.update',$patient->id)}}" method="post" enctype="multipart/form-data" novalidate>
  @method('put')
  @csrf
  <div class="callout callout-info">
    <div class="row">
      @php
        $patient->photo ? $url = "storage/patient/$patient->photo" : $url = "plugins/images/userX.png";
      @endphp
      <img class="profile-user-img img-fluid img-circle" src="{{asset($url)}}" alt="Foto de Perfil do Usuário">
      <x-input class="col-md-7" type="file" name="photo" label="Foto de Perfil" feedback="true"/>
      <div class="col-md-3" style="margin-top: 40px;">
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="not_photo" name="not_photo" onclick="notPhoto()">
            <label for="not_photo" class="custom-control-label">Sem Foto</label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-secondary card-outline">
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
  </div>
</form>
<!-- End Content -->
@endsection

@push('scripts')
<script>
  function notPhoto() {
    var not_photo = document.getElementsByName('not_photo')
    var photo = document.getElementById('photo')
    if (not_photo.item(0).checked == true) {
      photo.disabled = true
    } else {
      photo.disabled = false
    }
  }
</script>
@endpush