<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi_pembelian";
    public $primaryKey = "BELI_ID";
    
    public $incrementing = false;
    public $timestamps = false;
}
