<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PatientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name'   => 'required|string',
            'mother_name' => 'required|string',
            'birthday'    => 'required|date',
            'cpf'         => ['required','formato_cpf','cpf', Rule::unique('patients')->ignore($this->patient)],
            'cns'         => ['required','cns', Rule::unique('patients')->ignore($this->patient)],
            'cep'         => 'required|string|size:8',
            'adress'      => 'required|max:50',
            'number'      => 'required|integer',
            'complement'  => 'nullable|max:30',
            'district'    => 'required|max:40',
            'city'        => 'required|max:40',
            'state_abbr'  => ['required', Rule::in(['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'])],
        ];
    }

    public function attributes()
    {
        return [
            'full_name'   => 'Nome do Paciente',
            'mother_name' => 'Nome da Mãe',
            'birthday'    => 'Data de Nascimento',
            'cpf'         => 'CPF',
            'cns'         => 'CNS',
            'cep'         => 'CEP',
            'adress'      => 'Rua / Avenida',
            'number'      => 'Númeror',
            'complement'  => 'Complemento',
            'district'    => 'Bairro',
            'city'        => 'Cidade',
            'state_abbr'  => 'Estado',
        ];
    }
}