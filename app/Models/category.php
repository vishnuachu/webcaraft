<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class category extends Model
{
    protected $table = 'category';
    public $primaryKey = 'id';
    // public $timestamps =true;
    protected $fillable = [
        'name'
    ];
}
