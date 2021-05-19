@extends('layouts.admin')
@section('title', $pluralName)
@section('subtitle', $pluralName)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <x-button-create permission="cadastrar-permissoes" route="admin.permission.create"/>
  <div class="card-body table-responsive p-0">
    <table class="table table-bordered table-striped dataTable dtr-inline">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome da Permissão</th>
          <th>Slug</th>
          <th>Descrição</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($permissions as $permission)
        <tr>
          <td>{{$permission->id}}</td>
          <td>{{$permission->full_name}}</td>
          <td>{{$permission->name}}</td>
          <td>{{$permission->description}}</td>
          <td>
            <div class="btn-group">
              <x-button-show route="admin.permission.show" parameter1="{{$permission->id}}"/>
              <x-button-edit permission="editar-permissoes" route="admin.permission.edit" parameter1="{{$permission->id}}"/>
              <x-button-delete permission="deletar-permissoes" id="{{$permission->id}}"/>
            </div>
            <x-modal-delete id="{{$permission->id}}" route="admin.permission.destroy" name="{{$name}}" parameter1="{{$permission->id}}"/>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <x-pagination :parameter="$permissions"/>
</div>
<!-- End Content -->
@endsection
