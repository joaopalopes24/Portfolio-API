@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Role Name" value="{{$role->name}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Role Type" value="{{$role->guard_name}}" disabled/>
    </div>
  </div>
  <x-footer-show route="admin.role.index"/>
</div>
<!-- End Content -->
@endsection