@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Editar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
    <form class="needs-validation" action="{{route('admin.admin.update',$admin->id)}}" method="post" novalidate>
        @method('put')
        @csrf
        <div class="card-body">
            <div class="row">
                <x-input class="col-md-6" name="full_name" label="Nome Completo" value="{{old('full_name') ?? $admin->full_name}}" required />
                <x-input class="col-md-6" name="email" label="E-mail" type="email" placeholder="exemplo@exemplo" value="{{old('email') ?? $admin->email}}" required />
            </div>
            <div class="row">
                <x-input class="col-md-6" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="{{old('cpf') ?? $admin->cpf}}" required />
                <x-input class="col-md-6" name="birthday" label="Data de Nascimento" type="date" value="{{old('birthday') ?? $admin->birthday}}" required />
            </div>
            <div class="row">
                <x-checkbox class="custom-switch" name="password" label="Resetar Senha" />
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <p class="text-center mb-0"><strong>--------- PERFIS DO USUÁRIO ---------</strong></p>
                </div>
                @foreach($roles as $role)
                <x-checkbox-admin id="{{$role->name}}" name="roles[]" value="{{$role->name}}" parameter="{{$admin->hasRole($role->id)}}" label="{{$role->name}}" />
                @endforeach
            </div>
        </div>
        <x-footer-edit-create route="admin.admin.index" />
    </form>
</div>
<!-- End Content -->
@endsection