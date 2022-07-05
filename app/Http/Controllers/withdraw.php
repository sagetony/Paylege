<?php

namespace App\Http\Controllers;

use App\Models\withdraw as ModelsWithdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class withdraw extends Controller
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


        return view('user.withdraw')->with('respBTC', $respBTC)->with('datacs', $datacs)->with('datadeposit', $datadeposit)->with('datawit', $datawit)->with('databonus', $databonus)->with('datainterest', $datainterest);


    }
    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcDEFGHIJnostXYZ"), 0, 15);
        return $pass;
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'wallet' => 'required',
            'coin' => 'required',
        ]);

        if($validator->fails()){
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();

    
        }
        $datai = DB::table('deposits')
                ->where('userID', auth()->user()->userID)
                ->where('status', 'CONFIRM')
                ->sum('amount');
        $dataw = DB::table('withdraws')
                ->where('user_id', auth()->user()->userID)
                ->where('status', 'CONFIRM')
                ->sum('amount');

                $datas = $datai + $dataw;
                if($datas >= $request->amount ){
                    ModelsWithdraw::create([
                        'withdraw_id' => $this->randomDigit(),
                        'user_id'=> auth()->user()->userID,
                        'username' => auth()->user()->username,
                        'amount' => $request->amount,
                        'username' => auth()->user()->username,
                        'wallet_address' => $request->wallet,
                        'coin' => $request->coin,
                        'type_withdraw' => 'NONE',
                        'status' => 'PENDING',
                    ]);
                    return back()->with('toast_success', 'Withdrawal has been created');
      
    
                }else{
                    return back()->with('toast_error', 'Invalid Amount!! Enter A Valid Amount.');

                }

    }
}
