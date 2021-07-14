@extends('layouts.admin')
@section('title', $nameOther.' - '.$role->name)
@section('subtitle', $name)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form action="{{route('admin.role.permission.store',$role->id)}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <div class="row">
        @foreach($permissions as $permission)
        <x-checkbox-permission id="{{$permission->name}}" name="permissions[]" value="{{$permission->id}}" label="{{$permission->full_name}}" parameter="{{$role->hasPermissionTo($permission->id)}}" />
        @endforeach
      </div>
    </div>
    <x-footer-edit-create route="admin.role.index" />
  </form>
</div>
<!-- End Content -->
@endsection