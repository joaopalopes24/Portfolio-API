@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Editar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.permission.update',$permission->id)}}" method="post" novalidate>
    @method('put')
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-md-6" name="full_name" label="Nome da Permissão" value="{{$permission->full_name}}" feedback="true" required />
        <x-input class="col-md-6" name="name" label="Slug" value="{{$permission->name}}" disabled />
      </div>
      <div class="row">
        <x-input class="col-12" name="description" label="Descrição" value="{{$permission->description}}" feedback="true" required />
      </div>
    </div>
    <x-footer-edit-create route="admin.permission.index" />
  </form>
</div>
<!-- End Content -->
@endsection