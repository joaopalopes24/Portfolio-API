<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name'   => ['required','string', Rule::unique('permissions')->ignore($this->permission)],
            'description' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'full_name'   => 'Nome da Permissão',
            'description' => 'Descrição',
        ];
    }
}