<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\bonus;
use App\Models\deposit as ModelsDeposit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class deposit extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $id = $request->id;
        $datapas =  DB::table('packages')->get();

        $dataps =  DB::table('plans')->get();

        $datacs =  DB::table('coins')->get();

        $datadeposit =  DB::table('deposits')
            ->where('userID', auth()->user()->userID)
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $datainterest =  DB::table('deposits')
            ->where('userID', auth()->user()->userID)
            ->where('status', 'CONFIRM')
            ->sum('interest');
        $databonus =  DB::table('bonuses')
            ->where('referralname', auth()->user()->username)
            ->sum('amount');

        $datawit =  DB::table('withdraws')
            ->where('user_id', auth()->user()->userID)
            ->where('status', 'CONFIRM')
            ->sum('amount');

        return view('user.deposit')->with('dataps', $dataps)->with('datacs', $datacs)->with('datadeposit', $datadeposit)->with('datawit', $datawit)->with('databonus', $databonus)->with('datainterest', $datainterest)->with('datapas', $datapas)->with('id', $id);
    }
    public function randomDigit()
    {
        $pass = substr(str_shuffle("0123456789abcDEFGHIJnostXYZ"), 0, 15);
        return $pass;
    }

    public function verify(Request $request)
    {
        $data = DB::table('deposits')
            ->where('userID', auth()->user()->userID)
            ->orderBy('id', 'desc')
            ->first();
        $payload = [
            "price_amount" => $request->amount,
            "price_currency" => "USD",
            "order_id" => $this->randomDigit(),
            "ipn_callback_url" => "http://127.0.0.1:8000/deposit",
            "success_url" => "http://127.0.0.1:8000/deposit",
            "cancel_url" => "http://127.0.0.1:8000/deposit"
        ];

        $headers = [
            'x-api-key: H3ACXRY-AVHM85D-PRQKGKQ-RG3FDHJ',
            'Content-Type: application/x-www-form-urlencoded; charset=utf-8'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.nowpayments.io/v1/invoice");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));


        $server_output = curl_exec($ch);
        $resultData = json_decode($server_output, TRUE);

        curl_close($ch);
        return redirect($resultData['invoice_url']);
    }
}
