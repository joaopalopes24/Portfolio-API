@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Edit')
@section('content')
<!-- Home Content -->
<form class="needs-validation" action="{{route('admin.patient.update',$patient->id)}}" method="post" enctype="multipart/form-data" novalidate>
    @method('put')
    @csrf
    <div class="callout callout-info">
        <div class="row">
            @php
            $patient->photo ? $url = "storage/$patient->photo" : $url = "plugins/images/userX.png";
            @endphp
            <img class="profile-user-img img-fluid img-circle" src="{{asset($url)}}" alt="Foto de Perfil do Usuário">
            <x-input-file class="col-md-5" name="photo" label="Foto de Perfil (preferencialmente fotos quadradas)" />
            <div class="col-md-3 offset-md-2" style="margin-top: 40px;">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="not_photo" name="not_photo" onclick="notPhoto()">
                        <label for="not_photo" class="custom-control-label">Sem Foto</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-secondary card-outline">
        <div class="card-body">
            <div class="row">
                <x-input class="col-md-5" name="full_name" label="Nome do Paciente" value="{{$patient->full_name}}" required />
                <x-input class="col-md-4" name="mother_name" label="Nome da Mãe" value="{{$patient->mother_name}}" required />
                <x-input class="col-md-3" type="date" name="birthday" label="Data de Nascimento" value="{{$patient->birthday}}" required />
            </div>
            <div class="row">
                <x-input class="col-md-4" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="{{$patient->cpf}}" required />
                <x-input class="col-md-4" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000 0000 0000 0000" value="{{$patient->cns}}" required />
                <x-input class="col-md-4" label="CEP" placeholder="SOMENTE NÚMEROS" data-mask="00000-000" value="{{$patient->cep}}" onblur="pesquisacep(this.value);" required />
            </div>
            <div class="row">
                <x-input class="col-md-5" name="adress" label="Rua / Avenida" value="{{$patient->adress}}" required />
                <x-input class="col-md-3" type="number" name="number" label="Número" value="{{$patient->number}}" required />
                <x-input class="col-md-4" name="complement" label="Complemento" value="{{$patient->complement}}" />
            </div>
            <div class="row">
                <x-input class="col-md-5" name="district" label="Bairro" value="{{$patient->district}}" required />
                <x-input class="col-md-5" name="city" label="Cidade" value="{{$patient->city}}" required />
                <x-select-state class="col-md-2" name="state_abbr" label="Estado" value="{{$patient->state_abbr}}" required />
            </div>
        </div>
        <x-footer-edit-create route="admin.patient.index" />
    </div>
</form>
<!-- End Content -->
@endsection

@push('scripts')
<script>
    function notPhoto() {
        if ($('#not_photo').is(':checked')) {
            $('#photo').prop('disabled', true);
            $("#previewImg").css("display", "none");
        } else {
            $('#photo').prop('disabled', false);
            $("#previewImg").css("display", "block");
        }
    }

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
{{-- Esse Script com integração do ViaCEP foi pegado na própria documentação do ViaCEP com pequenas alterações --}}
<script src="{{asset('plugins/dist/js/viacep.js')}}"></script>
@endpush