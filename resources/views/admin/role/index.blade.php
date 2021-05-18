@extends('layouts.admin')
@section('title', $pluralName)
@section('subtitle', $pluralName)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <x-button-create permission="create-roles" route="admin.role.create"/>
  <div class="card-body table-responsive p-0">
    <table class="table table-bordered table-striped dataTable dtr-inline">
      <thead>
        <tr>
          <th>#</th>
          <th>Role Name</th>
          <th>Role Type</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($roles as $role)
        <tr>
          <td>{{$role->id}}</td>
          <td>{{$role->name}}</td>
          <td>{{$role->guard_name}}</td>
          <td>
            <div class="btn-group">
              <x-button-list permission="show-and-edit-permissions-for-roles" route="admin.role.permission.index" parameter1="{{$role->id}}"/>
              <x-button-show route="admin.role.show" parameter1="{{$role->id}}"/>
              <x-button-edit permission="edit-roles" route="admin.role.edit" parameter1="{{$role->id}}"/>
              <x-button-delete permission="delete-roles" id="{{$role->id}}"/>
            </div>
            <x-modal-delete id="{{$role->id}}" route="admin.role.destroy" name="{{$name}}" parameter1="{{$role->id}}"/>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <x-pagination :parameter="$roles"/>
</div>
<!-- End Content -->
@endsection
