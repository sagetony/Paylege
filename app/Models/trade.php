<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trade extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */    
    protected $fillable = [
        'tradeid',
        'userID',
        'name',
        'email',
        'originalcoin',
        'changedcoin',
        'selleramount',
        'buyeramount',
        'partneremail',
        'role',
        'fee',
        'status',
        'withdrawstatus',
        'Owner',
        'Trader',
        'tradeactivation',
        'partnername',
        'partnerrole',
        'pay',
       
    ];
}
