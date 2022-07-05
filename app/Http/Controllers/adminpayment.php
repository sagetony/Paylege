<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminpayment extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request){
                $datadeposits = DB::table('deposits')
                ->get();

               

                if(isset($request->confirmid)){
                    $datadepo = DB::table('deposits')
                        ->where('transaction_id', $request->confirmid)
                        ->first();
                    
                    $datauser = DB::table('users')
                        ->where('email', $datadepo->email)
                        ->first();

                    DB::table('deposits')
                    ->where('transaction_id', $request->confirmid)
                    ->update(['status' => 'CONFIRM']);
                    // email....
                        // if($datadepo->role == 'Buyer'){
                        //     $details = [
                        //         'name' => $datadepo->name,
                        //         'amount' => $datadepo->buyeramount,
                        //         'id' => $datadepo->transaction_id,
                        //         'coin' => $datadepo->originalcoin,
                        //     ]; 
        
                        //     Mail::to($datadepo->partneremail)->send(new EmailFunding($details));
        
                        //     return back();
                        
                        // }else{
                        //     $details = [
                        //         'name' => $datadepo->partnername,
                        //         'amount' => $datadepo->selleramount,
                        //         'id' => $datadepo->transaction_id,
                        //         'coin' => $datadepo->changedcoin,
                        //     ]; 
        
                        //     Mail::to($datadepo->email)->send(new EmailFunding($details));
        
                        //     return back();
                        // }
                   
                }elseif(isset($request->unconfirmid)){
                        DB::table('deposits')
                            ->where('transaction_id', $request->unconfirmid)
                            ->update(['status' => 'PENDING']);
                            return back();
        
                    }elseif(isset($request->deleteid)){
                        DB::table('deposits')
                        ->where('transaction_id', $request->deleteid)
                        ->delete();
                        return back();
        
                    }else{
                    return view('admin.adminpayment')->with('datadeposits', $datadeposits);  

                }

        
    }
}

