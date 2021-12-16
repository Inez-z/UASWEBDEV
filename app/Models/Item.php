<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class Item extends Model{
    use HasFactory;

    protected $table="jam_tangan";
    public $primaryKey = "J_SKU";
    //primary key varchar
    public $incrementing=false;

    //timestamp difalse
    public $timestamps = false;


}
