<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
{
    public function __construct()
    {
        $this->date1 = Carbon::now()->toDateString();
        $this->date2 = Carbon::now()->subYears(130)->toDateString();
        $this->date1_ = Carbon::now()->format('d/m/Y');
        $this->date2_ = Carbon::now()->subYears(130)->format('d/m/Y');
    }

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
            'birthday'  => 'required|date|before_or_equal:'.$this->date1.'|after_or_equal:'.$this->date2.'',
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

    public function messages()
    {
        return [
            'birthday.before_or_equal' => trans('validation.before_or_equal',['date' => $this->date1_]),
            'birthday.after_or_equal'  => trans('validation.after_or_equal',['date' => $this->date2_]),
        ];
    }
}