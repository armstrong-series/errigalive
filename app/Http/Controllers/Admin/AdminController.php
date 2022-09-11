<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\EventsModel;

use Exception;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(Request $request){

        $events = EventsModel::all()->count();
        $data = [
            "page" => "dashboard",
            "events" => $events
        ];
        return view('App.Admin.admin', $data);

    }

    public function clubEvent(){

        $data = ["page" => "events"];
        return view('App.ticket-event', $data);
    }



    public function addClubTruthEvent(Request $request){
        try {

        } catch (Exception $error) {

        }
    }
}
