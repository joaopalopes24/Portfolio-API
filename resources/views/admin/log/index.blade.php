@extends('layouts.admin')
@section('title', $pluralName)
@section('subtitle', $pluralName)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Search Specific Log</h3>
  </div>
  <form class="needs-validation" action="{{route('admin.log.index')}}">
    <div class="card-body">
      <div class="row">
        <x-input class="col-sm-3 form-group" name="subject_id" label="Object ID" type="search" value="{{$request->subject_id}}"/>
        <x-input class="col-sm-3 form-group" name="log_name" label="Object" type="search" value="{{$request->log_name}}"/>
        <x-input class="col-sm-3 form-group" name="causer_id" label="User ID" type="search" value="{{$request->causer_id}}"/>
        <x-input class="col-sm-3 form-group" label="Description" type="search" value="{{$request->description}}"/>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-outline-info float-right"><i class="fas fa-search"></i> Search</button>
      <button type="button" class="btn btn-outline-danger float-right" onclick="ClearFields();" style="margin-right: 10px;"><i class="fas fa-times"></i> Clear Fields</button>
    </div>
  </form>
</div>
<div class="card card-secondary card-outline">
  <div class="card-body table-responsive p-0">
    <table class="table table-bordered table-striped dataTable dtr-inline">
      <thead>
        <tr>
          <th>#</th>
          <th>Object ID</th>
          <th>Object</th>
          <th>User ID</th>
          <th>User</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($logs as $log)
        <tr>
          <td>{{$log->id}}</td>
          <td>{{$log->subject_id}}</td>
          <td>{{$log->log_name}}</td>
          <td>{{$log->causer_id}}</td>
          @if($log->causer_type != NULL)
            {{-- Using an exploded PHP function to get only the name of the models and not the full path --}}
            <td>{{explode('\\',$log->causer_type)[2]}}</td>
          @else
            <td>{{$log->causer_type}}</td>
          @endif
          <td>{{$log->description}}</td>
          <td>
            <div class="btn-group">
              <x-button-show route="admin.log.show" parameter1="{{$log->id}}"/>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <x-pagination :parameter="$logs"/>
</div>
<!-- End Content -->
@endsection

@push('scripts')
<script>
function ClearFields() {
  document.getElementById("subject_id").value = "";
  document.getElementById("log_name").value = "";
  document.getElementById("causer_id").value = "";
  document.getElementById("description").value = "";
}
</script>
@endpush