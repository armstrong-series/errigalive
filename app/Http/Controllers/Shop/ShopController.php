<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Helpers\Paths;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function items(){
        $data = ["page" => "shop"];

        return view('App.shop', $data);
    }



    protected function addItem(Request $request){
        try {

            if (!$request->name || !$request->description || !$request->price || !$request->file('product_image')) {
                $message = "Complete fields are required !";
                return response()->json(['message' => $message], 400);
            }

            if ($request->hasFile('product_image')) {
                $imagePath = storage_path('app/' . Paths::PRODUCT_PATH);
                $extension = $request->file('product_image')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                        $fileName = time() . '.' . $extension;
                        $request->file('product_image')->move($imagePath, $fileName);
                        $shop = new ShopModel();
                        $shop->id = Auth::id();
                        $shop->name = $request->name;
                        $shop->price = $request->price;
                        $shop->description = $request->description;
                        $shop->quantity  = $shop->quantity;
                        $shop->product_image = $fileName;
                        $shop->save();
                        return response()->json(["message" => "New item added successfully"], 200);
                    } else {
                        $message = "Invalid file format!";
                        return response()->json(['message' => $message], 400);
                    }


            } else {
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }

        } catch (Exception $error) {
            Log::info('Shop\ShopController@addItem error message: ' . $error->getMessage());
            $message = 'Sorry, unable to add new Product. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }
}
