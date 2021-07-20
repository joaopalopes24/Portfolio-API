<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChangeProfileRequest extends FormRequest
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
        if(Auth::user()->cpf || Auth::user()->bithday) return false;

        return true;
    }

    public function rules()
    {
        return [
            'cpf'      => 'required|cpf',
            'birthday' => 'required|date|before_or_equal:'.$this->date1.'|after_or_equal:'.$this->date2.'',
        ];
    }

    public function attributes()
    {
        return [
            'cpf'      => 'CPF',
            'birthday' => 'Data de Aniversário',
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