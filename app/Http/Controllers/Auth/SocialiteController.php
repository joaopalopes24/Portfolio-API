<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

        dd($user);
        // $user->token;
    }
}