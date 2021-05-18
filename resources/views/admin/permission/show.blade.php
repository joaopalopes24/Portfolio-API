@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Permission Name" value="{{$permission->full_name}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Slug" value="{{$permission->name}}" disabled/>
    </div>
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" label="Description" value="{{$permission->description}}" disabled/>
    </div>
  </div>
  <x-footer-show route="admin.permission.index"/>
</div>
<!-- End Content -->
@endsection