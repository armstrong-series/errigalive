<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
        ]);
	}

    public function account(){
        return view('Auth.register');
    }

    public function signupAccount(Request $request){
        try {

            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }
            $user = new User;
            $user->first_name = $request->firstname;
            $user->last_name = $request->firstname;
            $user->email = $request->email;
            $user->user_type = 'regular';
            $user->password = Hash::make($request->password);
            $user->uuid = (string) Str::uuid();
            $user->save();
            $message = "Account Created!";
            return response()->json(['message' => $message], 200);

        } catch (Exception $error) {
            Log::info("RegisterController::class, 'createAccount'" . $error->getMessage());
            $message = 'Unable to get information. Please try checking your network';
            return response()->json(['message' => $message], 500)
        }
    }
}
