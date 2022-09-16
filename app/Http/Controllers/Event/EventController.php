<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventsModel;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Helpers\Paths;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function eriggaEvents()
    {
        $events = EventsModel::all();
        $data = [
        "page" => "events",
        "events" => $events
        ];
        return view('App.ticket-event', $data);
    }


    public function createErrigaEvent(Request $request)
    {
        try {
            // dd($request->all());
            $validator = $this->validateEvent($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
            }

            if ($request->hasFile('event_banner')) {
                $imagePath = storage_path('app/' . Paths::EVENT_BANNER_PATH);
                $extension = $request->file('event_banner')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = "erigga-".time() . '.' . $extension;
                    $request->file('event_banner')->move($imagePath, $fileName);

                    $event = new EventsModel();
                    $event->user_id = Auth::id();
                    $event->name = $request->name;
                    $event->venue = $request->venue;
                    $event->category = $request->category;
                    $event->event_type = $request->event_type;
                    $event->date = $request->date;
                    $event->price = $request->price;
                    $event->description = $request->description;
                    $event->event_banner = $fileName;
                    // dd($event);
                    $event->save();
                    $message = "New Record added to event";

                    return response()->json(['message' => $message, "event" => $event], 200);

                } else {
                    $message = "Invalid file format!";
                    return response()->json(['message' => $message], 400);
                }

            } else {
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }
        } catch (Exception $error) {
            Log::info("EventController@createErrigaEvent". $error->getMessage());
            $message = "Unable to process data";
            return response()->json(['message' => $message], 500);

        }
    }





    public function updateEvent(Request $request)
    {
        try {
            $event = EventsModel::where('id', $request->id)->first();
            if(!$event){
                $message = "Event not found!";
                return response()->json(["message" => $message],404);

            }

            $event->name = $request->name;
            $event->venue = $request->venue;
            $event->date = $request->date;
            $event->price = $request->price;
            $event->category = $request->category;
            $event->event_type = $request->event_type;
            $event->description = $request->description;
            $event->save();
            $message = "Record upated successfuly";
            return response()->json(["message" => $message, "event" => $event],200);
        } catch (Exception $error) {
            Log::info("EventController@updateEvent". $error->getMessage());
            $message = "Unable to process data";
            return response()->json(['message' => $message], 500);
        }
    }


    public function deleteEvent(Request $request){
        try {
            $event = EventsModel::where('id', $request->id)->first();
            // dd($event);
            if(!$event){
                $message = "Event not found!";
                return response()->json(["message" => $message],404);

            }
            $event->delete();
            $message = "Event Deleted Successfully";

            return response()->json(['message' => $message], 200);

        } catch (Exception $error) {
            Log::info("EventController@updateEvent". $error->getMessage());
            $message = "Unable to delete data. Please, Try again";
            return response()->json(['message' => $message], 500);
        }
    }

    protected function validateEvent(array $data)
    {
        return Validator::make(
            $data, [
            'name' => 'required|string',
            'venue' => 'required|string',
            'date' => 'required|date',
            'description' => 'required|string',
            'price' => 'required',
            'event_type' => 'required',
            'category' => 'required',
            'event_banner' => 'required'
            ]
        );
    }

}
