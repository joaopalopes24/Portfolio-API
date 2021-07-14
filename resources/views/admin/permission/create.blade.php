@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Cadastrar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.permission.store')}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-md-6" name="full_name" label="Nome da Permissão" feedback="true" value="{{old('full_name')}}" required/>
        <x-input class="col-md-6" name="description" label="Descrição" feedback="true" value="{{old('description')}}" required/>
      </div>
    </div>
    <x-footer-edit-create route="admin.permission.index"/>
  </form>
</div>
<!-- End Content -->
@endsection