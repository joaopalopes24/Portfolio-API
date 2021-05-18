@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Create')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <form class="needs-validation" action="{{route('admin.admin.store')}}" method="post" novalidate>
    @csrf
    <div class="card-body">
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" name="full_name" label="Full Name" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Email" type="email" placeholder="example@example" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="CPF" placeholder="000.000.000-00" data-mask="000.000.000-00" feedback="true" required/>
      </div>
      <div class="row">
        <x-input class="col-xl-4 col-md-6 form-group" label="Birthday" type="date" feedback="true" required/>
      </div>
      <div class="row">
        <div class="col-xl-4 col-sm-6 form-group" style="margin-bottom: .7rem;">
          <p class="text-center" style="margin-bottom: 0;"><strong>--------- USER ROLES ---------</strong></p>
        </div>
      </div>
      @foreach($roles as $role)
        <x-checkbox-admin id="{{$role->name}}" name="roles[]"
          value="{{$role->name}}" label="{{$role->name}}"/>
      @endforeach
    </div>
    <x-footer-edit-create route="admin.admin.index"/>
  </form>
</div>
<!-- End Content -->
@endsection