<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class address extends Model
{
    protected $table = 'addresses';
    public $primaryKey = 'id';
    // public $timestamps =true;
    protected $fillable = [
        'user_id', 'default', 'line_one', 'line_two', 'city', 'district', 'state', 'deleted_at'
    ];
}
