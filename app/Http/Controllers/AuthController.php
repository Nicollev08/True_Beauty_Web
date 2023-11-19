<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\SocialProfile;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function redirect($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callback(Request $request, $driver)
    {

        if ($request->get('error')) {
            return redirect()->route('login');
        }

        $userSocialite = Socialite::driver($driver)->user();



        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())
            ->where('social_name', $driver)->first();


        if (!$social_profile) {

            $user = User::where('email', $userSocialite->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $userSocialite->getName(),
                    'email' => $userSocialite->getEmail(),
                ]);
            }


            $social_profile = SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->getId(),
                'social_name' => $driver,
                'social_avatar' => $userSocialite->getAvatar(),
            ]);
        }

        auth()->login($social_profile->user);

        return redirect()->to('/');
    }
}
