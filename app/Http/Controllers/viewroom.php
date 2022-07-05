<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewroom extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
         public function index()
         
         {

            $data = DB::table('trades')->where('userID', auth()->user()->userID)->where('partnerrole', 'Seller')->where('partnerrole', 'Buyer')->get();
            $datacs = DB::table('trades')->where('userID', auth()->user()->userID)->where('partnerrole', '!=' ,'NONE')->get();          
            // return dd($data[0]->tradeid )   ;   
            return view('user.viewroom')->with('datacs', $datacs);
         }
}
