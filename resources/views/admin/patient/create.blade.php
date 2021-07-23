@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $pluralName)
@section('caption', 'Cadastrar')
@section('content')
<!-- Home Content -->
<form class="needs-validation" action="{{route('admin.patient.store')}}" method="post" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="card card-secondary card-outline">
        <x-modal-photo :parameter="NULL" />
        <div class="card-body">
            <div class="row">
                <x-input class="col-md-5" name="full_name" label="Nome do Paciente" value="{{old('full_name')}}" required />
                <x-input class="col-md-4" name="mother_name" label="Nome da Mãe" value="{{old('mother_name')}}" required />
                <x-input class="col-md-3" type="date" name="birthday" label="Data de Nascimento" value="{{old('birthday')}}" required />
            </div>
            <div class="row">
                <x-input class="col-md-4" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="{{old('cpf')}}" required />
                <x-input class="col-md-4" label="CNS" placeholder="SOMENTE NÚMEROS" data-mask="000 0000 0000 0000" value="{{old('cns')}}" required />
                <x-input class="col-md-4" label="CEP" placeholder="SOMENTE NÚMEROS" data-mask="00000-000" onblur="pesquisacep(this.value);" value="{{old('cep')}}" required />
            </div>
            <div class="row">
                <x-input class="col-md-5" name="adress" label="Rua / Avenida" value="{{old('adress')}}" required />
                <x-input class="col-md-3" type="number" name="number" label="Número" value="{{old('number')}}" required />
                <x-input class="col-md-4" name="complement" label="Complemento" value="{{old('complement')}}" />
            </div>
            <div class="row">
                <x-input class="col-md-5" name="district" label="Bairro" value="{{old('district')}}" required />
                <x-input class="col-md-5" name="city" label="Cidade" value="{{old('city')}}" required />
                <x-select-state class="col-md-2" name="state_abbr" label="Estado" value="{{old('state_abbr')}}" required />
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