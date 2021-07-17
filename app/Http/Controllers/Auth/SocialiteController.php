<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $admin = Admin::where('email', $user->getEmail())->first();

        if(!$admin){
            $admin = Admin::create([
                'full_name'   => $user->getName(),
                'email'       => $user->getEmail(),
                'provider'    => $provider,
                'provider_id' => $user->getId(),
            ]);

            $admin->assignRole('Visitante');
        }

        Auth::login($admin);

        return redirect()->route('admin.home.index');
    }
}