@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Full Name" value="{{$admin->full_name}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" label="Email" value="{{$admin->email}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" label="CPF" value="{{$admin->cpf}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" label="Birthday" value="{{$admin->birthday}}" disabled/>
    </div>
    <div class="row">
      <div class="col-xl-4 col-sm-6 form-group" style="margin-bottom: .7rem;">
        <p class="text-center" style="margin-bottom: 0;"><strong>--------- USER ROLES ---------</strong></p>
      </div>
    </div>
    @foreach($roles as $role)
      <x-checkbox-admin id="{{$role->name}}" label="{{$role->name}}"
        parameter="{{$admin->hasRole($role->id)}}" disabled/>
    @endforeach
  </div>
  <x-footer-show route="admin.admin.index"/>
</div>
<!-- End Content -->
@endsection