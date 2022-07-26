<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class order_status extends Model
{
    protected $table = 'order_status';
    public $primaryKey = 'id';
    // public $timestamps =true;
    protected $fillable = [
        'status'
    ];
}
