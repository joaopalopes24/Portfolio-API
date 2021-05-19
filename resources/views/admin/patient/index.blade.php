@extends('layouts.admin')
@section('title', $pluralName)
@section('subtitle', $pluralName)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <x-button-create permission="cadastrar-pacientes" route="admin.patient.create"/>
  <div class="card-body pb-0">
    <div class="row">
      @foreach($patients as $patient)
        <x-patient-profile name="{{$name}}" :patient="$patient"/>
      @endforeach
    </div>
  </div>
  <x-pagination :parameter="$patients"/>
</div>
<!-- End Content -->
@endsection