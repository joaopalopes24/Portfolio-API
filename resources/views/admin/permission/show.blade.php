@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Visualizar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
    <div class="card-body">
        <div class="row">
            <x-input class="col-md-6" name="full_name" label="Nome da Permissão" value="{{$permission->full_name}}" disabled />
            <x-input class="col-md-6" name="name" label="Slug" value="{{$permission->name}}" disabled />
        </div>
        <div class="row">
            <x-input class="col-12" name="description" label="Descrição" value="{{$permission->description}}" disabled />
        </div>
    </div>
    <x-footer-show route="admin.permission.index" />
</div>
<!-- End Content -->
@endsection