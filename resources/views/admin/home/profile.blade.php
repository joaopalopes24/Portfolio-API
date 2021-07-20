@extends('layouts.admin')
@section('title', $nameOther)
@section('subtitle', $nameOther)
@section('caption', 'Meu Perfil')
@section('content')
<!-- Home Content -->
<div class="col-md-12">
    <div class="card">
        <form class="needs-validation" action="{{route('admin.home.profile_do')}}" method="post" novalidate>
            @csrf
            <div class="card-body">
                <div class="row">
                    <x-input class="col-md-6" label="Nome Completo" value="{{Auth::user()->full_name}}" disabled />
                    <x-input class="col-md-6" label="Email" value="{{Auth::user()->email}}" disabled />
                </div>
                <div class="row">
                    @if(!Auth::user()->birthday && !Auth::user()->cpf)
                    <x-input class="col-md-6" label="CPF" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="{{old('cpf')}}" required />
                    <x-input class="col-md-6" type="date" name="birthday" label="Data de Aniversário" value="{{old('birthday')}}" required />
                    @else
                    <x-input class="col-md-6" label="CPF" value="{{Auth::user()->cpf}}" disabled />
                    <x-input class="col-md-6" type="date" label="Data de Aniversário" value="{{Auth::user()->birthday}}" disabled />
                    @endif
                </div>
            </div>
            @if(!Auth::user()->birthday && !Auth::user()->cpf)
            <x-footer-edit-create route="admin.home.index" name1="Ir para Página Inicial" name2="Alterar Perfil" />
            @else
            <x-footer-show route="admin.home.index" name1="Ir para Página Inicial" />
            @endif
        </form>
    </div>
</div>
<!-- End Content -->
@endsection