<?php

namespace App\Http\Controllers;

use App\Mail\jointrade as MailJointrade;
use App\Models\trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class jointrade extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('user.jointrade');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            
            'id'=>'required',
            ]);

       if($validator->fails()){
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();

       }

       $datao = DB::table('trades')->where('tradeid', $request->id)->first();       
       if($datao->role == 'Buyer'){
        trade::create([
            'tradeid'=> $request->id,
            'userID'=> auth()->user()->userID,
            'name' =>auth()->user()->firstname.' '.auth()->user()->lastname,
            'email'=> auth()->user()->email,
            'originalcoin'=>$datao->originalcoin,
            'changedcoin' =>$datao->changedcoin,
            'selleramount'=>$datao->selleramount,
            'buyeramount'=> $datao->buyeramount,
            'partneremail'=> $datao->email,
            'role'=> 'Seller',
            'fee'=>  $datao->fee,
            'status' => 'PENDING',
            'withdrawstatus' => 'PENDING',
            'Owner' => 'Owner',
            'Trader' => 'Trader',
            'tradeactivation' => 'Active',
            'partnerrole' =>$datao->role, 
            'partnername' => $datao->name,
            'pay' => 'NOT YET',
    
    
            ]);    

            $dataa = DB::table('trades')->where('tradeid', $request->id)->where('tradeactivation', 'Active')->first();
            // return dd($dataa->role);

            DB::table('trades')->where('tradeid', $request->id)->where('tradeactivation', 'NONE')->update(['tradeactivation' => 'Active2', 'partnerrole' => $dataa->role, 'partnername' => $dataa->name ]);
            // email......
         $dati = DB::table('trades')->where('tradeactivation', 'Active')
         ->first();

         $dat = DB::table('trades')->where('tradeid', $dati->tradeid)->first();
         $details = [
             'email' => $dat->email,
             'tradeid' => $dat->tradeid,
             
         ];
         Mail::to($datao->email)->send(new MailJointrade($details));

         return redirect()->route('traderoom', ['id' => $dati->tradeid]);
    }else{
        trade::create([
            'tradeid'=> $request->id,
            'userID'=> auth()->user()->userID,
            'name' =>auth()->user()->firstname.' '.auth()->user()->lastname,
            'email'=> auth()->user()->email,
            'originalcoin'=>$datao->originalcoin,
            'changedcoin' =>$datao->changedcoin,
            'selleramount'=>$datao->selleramount,
            'buyeramount'=> $datao->buyeramount,
            'partneremail'=> $datao->email,
            'role'=>'Buyer',
            'fee'=> $datao->fee,
            'status' => 'PENDING',
            'withdrawstatus' => 'PENDING',
            'Owner' => 'Owner',
            'Trader' => 'Trader',
            'tradeactivation' => 'Active',
            'partnerrole' =>$datao->role, 
            'partnername' => $datao->name,
            'pay' => 'NOT YET',
    
            ]); 

            $dataa = DB::table('trades')->where('tradeid', $request->id)->where('tradeactivation', 'Active')->first();

            DB::table('trades')->where('tradeid', $request->id)->where('tradeactivation', 'NONE')->update(['tradeactivation' => 'Active2', 'partnerrole' => $dataa->role, 'partnername' => $dataa->name ]);
            // email......
         $dati = DB::table('trades')->where('tradeactivation', 'Active')
         ->first();

         $dat = DB::table('trades')->where('tradeid', $dati->tradeid)->first();
         $details = [
             'email' => $dat->email,
             'tradeid' => $dat->tradeid,
             
         ];
         Mail::to($datao->email)->send(new MailJointrade($details));

         return redirect()->route('traderoom', ['id' => $dati->tradeid]);

    }

       

    }
}
