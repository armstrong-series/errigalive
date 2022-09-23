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
    protected function connectGoogle(){
        try {
           return  Socialite::driver('google')->redirect();
        } catch (Exception $error) {
            Log::info("Error from google auth controller" . $error->getMessage());
        }
    }


    protected function callbackURL(){
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();
            if(!$user){
                return redirect()->back();
            }
            if($user){
                Auth::login($user);
                return response()->redirectToRoute('account.secure');
            }else{
                $newUser = new User();
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->user_type = "regular";
                $user->uuid = (string) Str::uuid();
                $newUser->password = bcrypt('123456');
                $newUser->save();
                Auth::login($newUser);
                return response()->redirectToRoute('account.secure');
            }
        } catch (Exception $error) {
            Log::info("Error from google auth controller" . $error->getMessage());
             $message = "Unable to process google auth";
            return response()->json(["message" => $message], 500);
        }
    }
}
