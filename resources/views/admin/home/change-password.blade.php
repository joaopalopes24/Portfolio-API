@extends('layouts.admin')
@section('title', $nameOther)
@section('subtitle', $nameOther)
@section('caption', 'Change Password')
@section('content')
<!-- Home Content -->
<div class="col-md-12">
  <div class="card">
    <form class="needs-validation" action="{{route('admin.home.change_password_do')}}" method="post" novalidate>
      @csrf
      <div class="card-body">
        <div class="row">
          <x-input class="col-xl-4 col-md-6 form-group" type="password" name="password_old" label="Current Password" minlength="8" feedback="true" required/>
        </div>
        <div class="row">
          <x-input class="col-xl-4 col-md-6 form-group" type="password" name="password" label="New Password" minlength="8" feedback="true" required/>
        </div>
        <div class="row">
          <x-input class="col-xl-4 col-md-6 form-group" type="password" name="password_confirmation" label="Confirm Password" minlength="8" feedback="true" required/>
        </div>
      </div>
      <x-footer-edit-create route="admin.home.index" name1="Go to Home Page" name2="Change Password"/>
    </form>
  </div>
</div>
<!-- End Content -->
@endsection