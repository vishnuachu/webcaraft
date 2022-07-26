<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class cart extends Model
{
    protected $table = 'cart';
    public $primaryKey ='id';
    // public $timestamps =true;
    protected $fillable = [
        'product_id','user_id', 'quantity'
    ];
}
