<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class traderoom extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $id = $request->id;

        $data = DB::table('trades')->where('tradeid', $id)->first();
        $datai = DB::table('trades')->where('tradeid', $id)->where('tradeactivation', 'Active')->first();
        return view('user.traderoom')->with('data', $data)->with('datai', $datai);

    }
}
