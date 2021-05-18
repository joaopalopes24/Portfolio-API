@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Edit')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.permission.update',$permission->id)}}" method="post" novalidate>
    @method('put')
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Permission Name" value="{{$permission->full_name}}" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Slug" value="{{$permission->name}}" disabled/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Description" value="{{$permission->description}}" feedback="true" required/>
      </div>
    </div>
    <x-footer-edit-create route="admin.permission.index"/>
  </form>
</div>
<!-- End Content -->
@endsection