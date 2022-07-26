<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class order extends Model
{
    protected $table = 'order';
    public $primaryKey = 'id';
    // public $timestamps =true;
    protected $fillable = [
        'user_id', 'order_no', 'delivery_address', 'order_status', 'payment_status', 'total_count', 'total_amount', 'deleted_at', 'reason',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function address()
    {
        return $this->belongsTo('App\Models\address', 'delivery_address', 'id');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\order_status', 'order_status', 'id');
    }
    public function payment()
    {
        return $this->belongsTo('App\Models\payment_status', 'payment_status', 'id');
    }
}
