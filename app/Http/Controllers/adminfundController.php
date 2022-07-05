<?php

namespace App\Http\Controllers;

use App\Mail\EmailFunding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class adminfundController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request){
                $datadeposits = DB::table('trades')
                ->get();

               

                if(isset($request->confirmid)){
                    $datadepo = DB::table('trades')
                        ->where('tradeid', $request->confirmid)
                        ->first();
                    
                    $datauser = DB::table('users')
                        ->where('email', $datadepo->email)
                        ->first();

                    DB::table('trades')
                    ->where('tradeid', $request->confirmid)
                    ->update(['status' => 'CONFIRM', 'pay' => 'PAID']);
                    // email....
                        if($datadepo->role == 'Buyer'){
                            $details = [
                                'name' => $datadepo->name,
                                'amount' => $datadepo->buyeramount,
                                'id' => $datadepo->tradeid,
                                'coin' => $datadepo->originalcoin,
                            ]; 
        
                            Mail::to($datadepo->partneremail)->send(new EmailFunding($details));
        
                            return back();
                        
                        }else{
                            $details = [
                                'name' => $datadepo->partnername,
                                'amount' => $datadepo->selleramount,
                                'id' => $datadepo->tradeid,
                                'coin' => $datadepo->changedcoin,
                            ]; 
        
                            Mail::to($datadepo->email)->send(new EmailFunding($details));
        
                            return back();
                        }
                   
                }elseif(isset($request->unconfirmid)){
                        DB::table('trades')
                            ->where('tradeid', $request->unconfirmid)
                            ->update(['status' => 'PENDING', 'pay' => 'PROCESSING']);
                            return back();
        
                    }elseif(isset($request->deleteid)){
                        DB::table('trades')
                        ->where('tradeid', $request->deleteid)
                        ->delete();
                        return back();
        
                    }else{
                    return view('admin.adminfunding')->with('datadeposits', $datadeposits);  

                }

        
    }
}
