@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Cadastrar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
    <form class="needs-validation" action="{{route('admin.role.store')}}" method="post" novalidate>
        @csrf
        <div class="card-body">
            <x-input class="col-md-6" name="name" label="Nome do Perfil" value="{{old('name')}}" required />
        </div>
        <x-footer-edit-create route="admin.role.index" />
    </form>
</div>
<!-- End Content -->
@endsection