<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\EventsModel;
use App\Models\TicketModel;
use App\Models\User;
use App\Helpers\Common;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Exception;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(Request $request){

        $events = EventsModel::all()->count();
        $tickets = TicketModel::all()->count();
        $users = User::all()->count();
        $user = User::where('id', Auth::id())->get();
        $welcome = Common::dailyHourlyWelcome();
        $data = [
            "page" => "dashboard",
            "events" => $events,
            "tickets" => $tickets,
            'users' => $users,
            'user' => $user,
            'welcome' => $welcome
        ];
        return view('App.Admin.admin', $data);

    }

    public function clubEvent(){

        $data = ["page" => "events"];
        return view('App.ticket-event', $data);
    }



    public function userManagement(Request $request){
        try {

            if (Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'support') {
               $users = User::all();

                $data = [
                    'page' => 'user-management',
                    'users' => $users

                ];
                return view('App.Admin.usermanagement', $data);

            } else {
                return redirect()->back();
            }

        }catch (Exception $error) {
            Log::info("Admin\AdminController@userManagement error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
         }
    }



    public function createUser(Request $request)
    {
        try {
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }
            $user = new User;
            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->user_type = $request->user_type;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = Hash::make($request->password);
            $user->uuid = (string) Str::uuid();
            $user->save();
            $message = "Member added!";
            return response()->json(["message" => $message, "user" => $user], 200);

        } catch (Exception $error) {
            Log::info("Admin\AdminController@createUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }



    public function deleteUser(Request $request){
        try {
            $user = User::where('id', $request->id)->first();

            if(!$user){
                $message = "Unknown User!";
                return response()->json(['message' =>  $message],404);
            }
            $user->delete();
            $message = "Delete successful!";
            return response()->json(["message" => $message, "user" => $user], 200);

        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'mobile' => 'nullable|unique:users|max:20|min:8',
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
            'role' => 'required|string'
        ]);
	}




}
