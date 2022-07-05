<?php

namespace App\Http\Controllers;

use App\Mail\traderoom;
use App\Models\trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class createtrade extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $datacs = DB::table('coins')->get();
      return view('user.createtrade')->with('datacs', $datacs);
    }
    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcDEFGHIJnostXYZ"), 0, 15);
        return $pass;
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            
            'originalcoin'=>'required',
            'changedcoin'=>'required',
            'buyeramount'=>'required',
            'selleramount'=>'required',
            'role'=>'required',
            'partneremail'=>'required',
            'fee'=>'required',
            ]);

       if($validator->fails()){
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();

       }

       trade::create([
        'tradeid'=> $this->randomDigit(),
        'userID'=> auth()->user()->userID,
        'name' =>auth()->user()->firstname.' '.auth()->user()->lastname,
        'email'=> auth()->user()->email,
        'originalcoin'=>$request->originalcoin,
        'changedcoin' =>$request->changedcoin,
        'selleramount'=>$request->selleramount,
        'buyeramount'=> $request->buyeramount,
        'partneremail'=> $request->partneremail,
        'role'=>$request->role,
        'fee'=> $request->fee,
        'status' => 'PENDING',
        'withdrawstatus' => 'PENDING',
        'Owner' => 'Owner',
        'Trader' => 'Trader',
        'pay' => 'NOT YET',


        ]);    

         // email......
         $dati = DB::table('trades')->orderBy('id', 'desc')
         ->first();

         $dat = DB::table('trades')->where('tradeid', $dati->tradeid)->first();
         $details = [
             'email' => $dat->email,
             'tradeid' => $dat->tradeid,
             
         ];
         Mail::to($request->partneremail)->send(new traderoom($details));
        //  return 'email sent';
        $data = DB::table('trades')
        // ->where('email', auth()->user()->email)
        ->orderBy('id', 'desc')
        ->first();
        return redirect()->route('traderoom', ['id' => $data->tradeid]);
        
    
        
    }
}
