@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
    <div class="card-body">
        <div class="row">
            <x-input class="col-md-6" name="name" label="Nome do Perfil" value="{{$role->name}}" disabled />
            <x-input class="col-md-6" name="name" label="Tipo do Perfil" value="{{$role->guard_name}}" disabled />
        </div>
    </div>
    <x-footer-show route="admin.role.index" />
</div>
<!-- End Content -->
@endsection