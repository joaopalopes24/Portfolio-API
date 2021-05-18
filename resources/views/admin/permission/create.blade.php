@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Create')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.permission.store')}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Permission Name" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Description" feedback="true" required/>
      </div>
    </div>
    <x-footer-edit-create route="admin.permission.index"/>
  </form>
</div>
<!-- End Content -->
@endsection