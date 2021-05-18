@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Show')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" label="ID" value="{{$log->id}}" disabled/>
      <x-input class="col-xl-4 col-md-6 form-group" name="log_name" label="Object" value="{{$log->log_name}}" disabled/>
      <x-input class="col-xl-4 col-md-6 form-group" label="Description" value="{{$log->description}}" disabled/>
    </div>
    <div class="row">
      <x-textarea class="col-sm-12 form-group" name="causer" label="Data of the User responsible for the Log" :value="$log->causer" disabled/>
    </div>
    <div class="row">
      <x-textarea class="col-sm-12 form-group" name="subject" label="Current Object Data" :value="$log->subject" disabled/>
    </div>
    <div class="row">
      <x-textarea class="col-sm-12 form-group" name="changes" label="Object A/D Data" :value="$log->changes" disabled/>
    </div>
  </div>
  <x-footer-show route="admin.log.index"/>
</div>
<!-- End Content -->
@endsection

@push('scripts')
<!-- AutoSize -->
<script src="{{asset('plugins/dist/js/autosize.min.js')}}"></script>
<script>autosize(document.querySelectorAll('#autosize'));</script>
@endpush