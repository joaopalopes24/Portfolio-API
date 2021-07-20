@extends('layouts.admin')
@section('title', $nameOther)
@section('subtitle', $nameOther)
@section('caption', 'Alterar Senha')
@section('content')
<!-- Home Content -->
<div class="col-md-12">
    <div class="card">
        <form class="needs-validation" action="{{route('admin.home.change_password_do')}}" method="post" novalidate>
            @csrf
            <div class="card-body">
                <div class="row">
                    @if(Auth::user()->password)
                    <x-input class="col-md-6" type="password" name="password_old" label="Senha Atual" minlength="8" required />
                    @else
                    <x-input class="col-md-6" type="password" label="Senha Atual" disabled />
                    @endif
                </div>
                <div class="row">
                    <x-input class="col-md-6" type="password" name="password" label="Nova Senha" minlength="8" required />
                </div>
                <div class="row">
                    <x-input class="col-md-6" type="password" name="password_confirmation" label="Confirmar Senha" minlength="8" required />
                </div>
                <x-checkbox class="custom-switch" name="view_password" label="Mostrar Senha" onclick="viewDatePassword()" />
            </div>
            <x-footer-edit-create route="admin.home.index" name1="Ir para Página Inicial" name2="Alterar Senha" />
        </form>
    </div>
</div>
<!-- End Content -->
@endsection