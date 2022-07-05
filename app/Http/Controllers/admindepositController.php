<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class admindepositController extends Controller

{
    public function __construct()
            {
                $this->middleware(['admin']);
            }

    public function index(){
        
        
        return view ('admin.deposit');
    }

    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'coinName'=>'required',
            'coinAddress'=>'required',

            ]);
       if($validator->fails()){
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();

       }

       DB::table('coins')->insert([
        'coinID' => $this->randomDigit(),
        'coinName' => $request->coinName,
        'coinAddress' =>$request->coinAddress,
       ]);
        return back()->with('toast_success', 'Coin successfully added');
    }
}
