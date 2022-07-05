<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $ch = curl_init('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        //$exchangeRates = json_decode($json);
        $respBTC = json_decode($json);
        $datdeposits =  DB::table('deposits')
        ->where('userID', auth()->user()->userID)
        ->where('status', 'CONFIRM')
        ->get();
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

        $datatrade = DB::table('trades')
                    ->where('userID', auth()->user()->userID)
                    ->where('status', 'CONFIRM')
                    ->count('id');
        $datatradea = DB::table('trades')
                    ->where('userID', auth()->user()->userID)
                    ->where('tradeactivation', 'Active')
                    ->count('id');
        $datatradet = DB::table('trades')
                    ->where('userID', auth()->user()->userID)
                    ->count('id');
        return view('user.dashboard')->with('respBTC', $respBTC)->with('datawit', $datawit)->with('databonus', $databonus)->with('datainterest', $datainterest)->with('datadeposit', $datadeposit)->with('datdeposits', $datdeposits)->with('datatrade', $datatrade)->with('datatradea', $datatradea)->with('datatradet', $datatradet);

    }
}
