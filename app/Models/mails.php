<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class mails extends Model
{
    protected $table = 'mails';
    public $primaryKey ='id';
    // public $timestamps =true;
    protected $fillable = [
        'mail_type','subject','content','status',
    ];
}
