@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Create')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.role.store')}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <x-input class="col-xl-4 col-md-6 form-group" name="name" label="Role Name" feedback="true" required/>
    </div>
    <x-footer-edit-create route="admin.role.index"/>
  </form>
</div>
<!-- End Content -->
@endsection