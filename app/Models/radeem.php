<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class radeem extends Model
{
    protected $table = 'radeem';
    public $primaryKey ='id';
    // public $timestamps =true;
    protected $fillable = [
        'offerid', 'userid', 'radeemid'
    ];
}
