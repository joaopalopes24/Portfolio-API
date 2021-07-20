@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Edit')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
    <form class="needs-validation" action="{{route('admin.role.update',$role->id)}}" method="post" novalidate>
        @method('put')
        @csrf
        <div class="card-body">
            <div class="row">
                <x-input class="col-md-6" name="name" label="Nome do Perfil" value="{{old('name') ?? $role->name}}" required />
                <x-input class="col-md-6" name="guard_name" label="Tipo do Perfil" value="{{$role->guard_name}}" disabled />
            </div>
        </div>
        <x-footer-edit-create route="admin.role.index" />
    </form>
</div>
<!-- End Content -->
@endsection