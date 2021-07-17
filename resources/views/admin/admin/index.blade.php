@extends('layouts.admin')
@section('title', $pluralName)
@section('subtitle', $pluralName)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
    <x-button-create permission="cadastrar-administradores" route="admin.admin.create" />
    <div class="card-body table-responsive p-0">
        <table class="table table-bordered table-striped dataTable dtr-inline">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Data de Aniversário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->full_name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->cpf}}</td>
                    @php
                    $birthday = new DateTime($admin->birthday);
                    @endphp
                    <td>{{$birthday->format('d/m/Y')}}</td>
                    <td>
                        <div class="btn-group">
                            <x-button-list permission="visualizar-e-alterar-permissoes-dos-administradores" route="admin.admin.permission.index" parameter1="{{$admin->id}}" />
                            <x-button-show route="admin.admin.show" parameter1="{{$admin->id}}" />
                            <x-button-edit permission="editar-administradores" route="admin.admin.edit" parameter1="{{$admin->id}}" />
                            <x-button-delete permission="deletar-administradores" id="{{$admin->id}}" />
                        </div>
                        <x-modal-delete id="{{$admin->id}}" route="admin.admin.destroy" name="{{$name}}" parameter1="{{$admin->id}}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-pagination :parameter="$admins" />
</div>
<!-- End Content -->
@endsection