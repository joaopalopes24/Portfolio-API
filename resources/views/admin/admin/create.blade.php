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
        <x-input class="col-md-6" name="full_name" label="Nome Completo" feedback="true" value="{{old('full_name')}}" required />
        <x-input class="col-md-6" name="email" label="E-mail" type="email" placeholder="exemplo@exemplo" feedback="true" value="{{old('email')}}" required />
      </div>
      <div class="row">
        <x-input class="col-md-6" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" feedback="true" value="{{old('cpf')}}" required />
        <x-input class="col-md-6" name="birthday" label="Data de Aniversário" type="date" feedback="true" value="{{old('birthday')}}" required />
      </div>
      <div class="row">
        <div class="col-12 mb-3">
          <p class="text-center mb-0"><strong>--------- PERFIS DO USUÁRIO ---------</strong></p>
        </div>
        @foreach($roles as $role)
        <x-checkbox-admin id="{{$role->name}}" name="roles[]" value="{{$role->name}}" label="{{$role->name}}" />
        @endforeach
      </div>
    </div>
    <x-footer-edit-create route="admin.admin.index" />
  </form>
</div>
<!-- End Content -->
@endsection