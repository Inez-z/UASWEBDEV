<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory, HasCompositePrimaryKey;

    protected $table = "detail_beli";
    public $primaryKey = ["BELI_ID", "J_SKU"];

    public $incrementing = false;
    public $timestamps = false;
}
