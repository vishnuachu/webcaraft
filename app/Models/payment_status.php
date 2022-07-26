<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class payment_status extends Model
{
    protected $table = 'payment_statuses';
    public $primaryKey = 'id';
    protected $fillable = [
        'status'
    ];
}
