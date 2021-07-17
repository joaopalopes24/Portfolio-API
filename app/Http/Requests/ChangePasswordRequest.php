<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ChangePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'password_old' => ['password','string','min:8', Rule::requiredIf($request->input('password_old') ? true : false )],
            'password'     => 'required|confirmed|string|min:8',
        ];
    }

    public function attributes()
    {
        return [
            'password_old' => 'Senha Atual',
            'password'     => 'Nova Senha',
        ];
    }
}