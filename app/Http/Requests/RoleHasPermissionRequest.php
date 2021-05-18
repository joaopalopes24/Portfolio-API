<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleHasPermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'permissions' => 'required|exists:permissions,id',
        ];
    }

    public function attributes()
    {
        return [
            'permissions' => 'Role Permissions',
        ];
    }
}