<?php

namespace App\Http\Controllers\Auth\SocialAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{


    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }



    protected function connectGoogle()
    {
        try {
            return  Socialite::driver('google')->redirect();
        } catch (Exception $error) {
            Log::info("Error from google auth controller" . $error->getMessage());
            $message = "Unable to process google auth";
            return response()->json(["message" => $message], 500);
        }
    }


    public function callbackURL()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $this->_registerOrLoginUser($googleUser);
            return response()->redirectToRoute('account.secure');

        } catch (Exception $error) {
            Log::info("Error from google auth controller" . $error->getMessage());
             $message = "Unable to process google auth";
            return response()->json(["message" => $message], 500);
        }
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();
        if(!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->user_type = "regular";
            $user->uuid = (string) Str::uuid();
            $user->password = bcrypt('123456');
            $user->save();

        }
        Auth::login($user);


    }
}
