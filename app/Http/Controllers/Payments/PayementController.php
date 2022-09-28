<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\TicketModel;
use Unicodeveloper\Paystack\Paystack;
use App\Models\User;
use App\Mail\PaymentVerificationMail;
use Illuminate\Support\Facades\Mail;
use Exception;

class PayementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function initializePaystackPayment(Request $request){

        $price = $request->price;
        $request->merge([
            'amount' => $price,
            'email'=> Auth::user()->email,
            'currency' => "NGN",
            // 'callback_url' => route('payment.callback')
        ]);

        try {
            $url = paystack()->getAuthorizationUrl()->url;
            return redirect()->away($url);

        } catch (Exception $error) {
            Log::info("Payments\PaymentController@initializePaystackPayment". $error->getMessage());
            $message = "Unable to process payment";
            return response()->json(["message" => $message], 500);
        }
    }


    protected function paystackCallbackURL() {
        try {

        $user = User::where('id', Auth::id())->first();
        if(!$user){
            $message = "No User found!";
            return response()->json(["message" => $message], 400);
        }

        $paymentDetails = paystack()->getPaymentData();
        $invoice_id = $paymentDetails['data']['metadata']['invoiceId'];
        $status = $paymentDetails['data']['status'];
        $amount = $paymentDetails['data']['amount'];
        $number  = rand(1111111111,9999999999);
        $number = 'eriggalive-'.$number;

        if($status == "success"){
            $ticket = new TicketModel();
            $ticket->user_id = Auth::id();
            $ticket->email = $user->email;
            $ticket->price = $amount;
            $ticket->ticket_number = $number;
            $ticket->invoice_id = $invoice_id;
            $ticket->save();
            Mail::to($user->email)->send(new PaymentVerificationMail($user));
            return view('Frontend.index');
        }

        } catch (Exception $error) {
            Log::info("Payments\PaymentController@paystackCallbackURL". $error->getMessage());
        }

    }
}
