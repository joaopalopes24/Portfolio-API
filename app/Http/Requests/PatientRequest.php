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
            'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'not_photo'   => 'nullable',
            'full_name'   => 'required|string',
            'mother_name' => 'required|string',
            'birthday'    => 'required|date',
            'cpf'         => ['required','formato_cpf','cpf', Rule::unique('patients')->ignore($this->patient)],
            'cns'         => ['required','cns', Rule::unique('patients')->ignore($this->patient)],
            'cep'         => 'required|string|size:9|regex:/^[0-9]{5}[.][0-9]{3}/',
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
            'photo'       => 'Foto de Perfil',
            'not_photo'   => 'Sem Foto',
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