<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminHasPermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'permissions' => 'nullable|exists:permissions,id',
        ];
    }

    public function attributes()
    {
        return [
            'permissions' => 'Permissões do Administrador',
        ];
    }
}