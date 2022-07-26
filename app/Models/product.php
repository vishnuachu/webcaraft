<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class product extends Model
{
    protected $table = 'product';
    public $primaryKey = 'id';
    protected $fillable = [
        'registerid', 'name', 'description', 'category_id', 'quantity', 'price', 'image', 'status', 'userid', 'slug', 'deleted_at'
    ];



    public function cate()
    {
        return $this->belongsTo('App\Models\category', 'category_id', 'id');
    }
}
