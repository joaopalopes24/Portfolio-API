@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Visualizar')
@section('content')
<!-- Home Content -->
<div class="card card-secondary card-outline">
  <div class="card-body">
    <div class="row">
      <x-input class="col-xl-4 col-md-6 form-group" label="ID" value="{{$log->id}}" disabled/>
      <x-input class="col-xl-4 col-md-6 form-group" name="log_name" label="Objeto" value="{{$log->log_name}}" disabled/>
      <x-input class="col-xl-4 col-md-6 form-group" name="description" label="Descrição" value="{{$log->description}}" disabled/>
    </div>
    <div class="row">
      <x-textarea class="col-sm-12 form-group" name="causer" label="Dados do Usuário responsável pelo Log" :value="$log->causer" disabled/>
    </div>
    <div class="row">
      <x-textarea class="col-sm-12 form-group" name="subject" label="Dados do Objeto atual" :value="$log->subject" disabled/>
    </div>
    <div class="row">
      <x-textarea class="col-sm-12 form-group" name="changes" label="Dados A/D do Objeto" :value="$log->changes" disabled/>
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