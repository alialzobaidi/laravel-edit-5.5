<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthsocController extends Controller
{
   
    public function  redirectToProvider($provider)
    {
     return socialite::driver($provider)->redirect();


    }

public function handleProviderCallback($provider)
{
    $user = Socialite::driver($provider)->user();
}


}
