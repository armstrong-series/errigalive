<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Exception;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth' ,'verified']);
    }

    public function secureAccount(){
        $data = [
            "page" => "account",
            ];
        return view('App.account', $data);

    }



    public function ticketOrder()
    {

        $transactionOrders = TicketModel::where('user_id', Auth::id())->get();
        $data = [
            "page" => "transactions",
            "transactionOrders" => $transactionOrders
        ];

        return view('App.transactions', $data);

    }

    public function paymentInvoice(Request $request)
    {
        try {
            $orderInvoice = TicketModel::where('id', $request->id)->first();
            if(!$orderInvoice){
                $message = "Unknown Invoice!";
                return response()->json(["message" => $message], 400);
            }
            $data = ["orderInvoice" => $orderInvoice];
           return view('App.invoice', $data);
        } catch (Exception $error) {
            Log::info("Error on paymentInvoice" .$error->getMessage());
            $message = "Unable to process data";
            return response()->json(["message" => $message, "error" => true], 500);
        }
    }
}
