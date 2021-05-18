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
        <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Role Name" value="{{$role->name}}" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="guard_name" label="Role Type" value="{{$role->guard_name}}" disabled/>
      </div>
    </div>
    <x-footer-edit-create route="admin.role.index"/>
  </form>
</div>
<!-- End Content -->
@endsection