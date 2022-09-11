<?php
namespace  App\Traits;
use Illuminate\Support\Facades\Request;
use App\Helpers\Paths;
use Exception;
use Illuminate\Support\Facades\Log;

trait Upload {


    public function ProductFileUpload(Request $request){
        try {

            if ($request->hasFile('product_image')) {
                $imagePath = storage_path('app/' . Paths::PRODUCT_PATH);
                $extension = $request->file('product_image')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('photo_url')->move($imagePath, $fileName);


                } else {
                    $message = "Invalid file format!";
                    return response()->json(['message' => $message], 400);
                }

            } else {
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }
        } catch (Exception $error) {

        }
    }
}
