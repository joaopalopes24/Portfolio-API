<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required','string', Rule::unique('roles')->ignore($this->role)],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Role Name',
        ];
    }
}