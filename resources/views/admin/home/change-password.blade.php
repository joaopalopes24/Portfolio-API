@extends('layouts.admin')
@section('title', $nameOther)
@section('subtitle', $nameOther)
@section('caption', 'Alterar Senha')
@section('content')
<!-- Home Content -->
<div class="col-md-12">
  <div class="card">
    <form class="needs-validation" action="{{route('admin.home.change_password_do')}}" method="post" novalidate>
      @csrf
      <div class="card-body">
        <div class="row">
          <x-input class="col-xl-4 col-md-6" type="password" name="password_old" label="Senha Atual" minlength="8" feedback="true" required/>
        </div>
        <div class="row">
          <x-input class="col-xl-4 col-md-6" type="password" name="password" label="Nova Senha" minlength="8" feedback="true" required/>
        </div>
        <div class="row">
          <x-input class="col-xl-4 col-md-6" type="password" name="password_confirmation" label="Confirmar Senha" minlength="8" feedback="true" required/>
        </div>
      </div>
      <x-footer-edit-create route="admin.home.index" name1="Ir para Página Inicial" name2="Alterar Senha"/>
    </form>
  </div>
</div>
<!-- End Content -->
@endsection