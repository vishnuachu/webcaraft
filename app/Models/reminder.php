<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class reminder extends Model
{
    protected $table = 'reminders';
    public $primaryKey ='id';
    // public $timestamps =true;
    protected $fillable = [
        'user_id', 'code', 'completed', 'completed_at'
    ];
}
