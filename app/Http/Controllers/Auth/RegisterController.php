<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|string|max:255',
            'cpf'       => 'required|cpf',
            'birthday'  => 'required|date',
            'email'     => 'required|string|email|max:255|unique:admins',
            'password'  => 'required|string|min:8|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return Admin::create([
            'full_name' => $data['full_name'],
            'cpf'       => $data['cpf'],
            'birthday'  => $data['birthday'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $admin)
    {
        $admin->assignRole('Visitante');
    }
}