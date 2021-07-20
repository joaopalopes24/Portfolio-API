<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required|string',
            'email'     => ['required','email', Rule::unique('admins')->ignore($this->admin)],
            'cpf'       => ['required','cpf', Rule::unique('admins')->ignore($this->admin)],
            'birthday'  => 'required|date',
            'password'  => ['nullable', Rule::in(['on'])],
            'roles'     => 'required|exists:roles,name',
        ];
    }

    public function attributes()
    {
        return [
            'full_name' => 'Nome Completo',
            'email'     => 'E-mail',
            'cpf'       => 'CPF',
            'birthday'  => 'Data de Nascimento',
            'password'  => 'Resetar Senha',
            'roles'     => 'Perfis do Usuário',
        ];
    }
}