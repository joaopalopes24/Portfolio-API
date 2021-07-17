<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($plataform)
    {
        return Socialite::driver($plataform)->redirect();
    }

    public function handleProviderCallback($plataform)
    {
        $user = Socialite::driver($plataform)->user();

        $admin = Admin::where('email', $user->getEmail())->first();

        if(!$admin){
            $admin = Admin::create([
                'full_name' => $user->getName(),
                'email'     => $user->getEmail(),
                'password'  => $plataform,
            ]);

            $admin->assignRole('Visitante');
        }

        Auth::login($admin);

        return redirect()->route('admin.home.index');
    }
}