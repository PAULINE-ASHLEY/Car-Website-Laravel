<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function callback($provider)
    {
        try{
            $SocialUser = Socialite::driver($provider)->user();
            $user = User::where([
                'provider_id' => $SocialUser->id,
                'provider' => $provider
            ])->first();

            if(!$user){
                if(User::where('email', $SocialUser->getEmail())->exists()){
                    return redirect('/login')->withErrors(['email' => 'This email has used a different method to login']);
                }
                $password = Str::random(length:12);
                $user = User::create([
                    'name' => $SocialUser->getName(),
                    'email' => $SocialUser->getEmail(),
                    'username' => User::generateUserName($SocialUser->getNickname()),
                    'provider' => $provider,
                    'provider_id' => $SocialUser->getId(),
                    'provider_token' => $SocialUser->token,
                    'password' => $password,
                ]);

                $user->sendEmailVerificationNotification();
                $user->update([
                    'password' => Hash::make($password)
                ]);
            }
         
            Auth::login($user);
         
            return redirect('/dashboard');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
