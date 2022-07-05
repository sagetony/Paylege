<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class payment extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $id = $request->id;
        $data = DB::table('deposits')
                ->where('transaction_id', $id) 
                ->get();
            $datcoin = DB::table('coins')->where('coinName', $data[0]->coin)->get();
        
        if(isset($id)){
            return view('user.paymentpage')->with('data', $data)->with('datcoin', $datcoin);
        }
        else{
            return redirect()->route('deposit');
        }

    }
}
