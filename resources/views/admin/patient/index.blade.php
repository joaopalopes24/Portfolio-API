@extends('layouts.admin')
@section('title', $pluralName)
@section('subtitle', $pluralName)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Pesquisar Paciente Específico</h3>
    </div>
    <form class="needs-validation" action="{{route('admin.patient.index')}}">
        <div class="card-body">
            <div class="row">
                <x-input class="col-sm-6 col-md-3" type="search" name="full_name" label="Nome do Paciente" value="{{$request->full_name}}" />
                <x-input class="col-sm-6 col-md-3" type="search" name="mother_name" label="Nome da Mãe" value="{{$request->mother_name}}" />
                <x-input class="col-sm-6 col-md-3" type="search" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="{{$request->cpf}}" />
                <x-input class="col-sm-6 col-md-3" type="search" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000000000000000" value="{{$request->cns}}" />
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-info float-right"><i class="fas fa-search"></i> Pesquisar</button>
            <button type="button" class="btn btn-outline-danger float-right" onclick="ClearFields();" style="margin-right: 10px;"><i class="fas fa-times"></i> Limpar Campos</button>
        </div>
    </form>
</div>
<div class="card card-secondary card-outline">
    <x-button-create permission="cadastrar-pacientes" route="admin.patient.create" />
    <div class="card-body pb-0">
        <div class="row">
            @foreach($patients as $patient)
            <x-patient-profile name="{{$name}}" :patient="$patient" />
            @endforeach
        </div>
    </div>
    <x-pagination :parameter="$patients" />
</div>
<!-- End Content -->
@endsection

@push('scripts')
<script>
    function ClearFields() {
        document.getElementById("full_name").value = "";
        document.getElementById("mother_name").value = "";
        document.getElementById("cpf").value = "";
        document.getElementById("cns").value = "";
    }
</script>
@endpush