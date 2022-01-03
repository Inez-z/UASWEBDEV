<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;
use DB;

class Item extends Model{
    use HasFactory;

    protected $table="jam_tangan";
    protected $fillable =['J_SKU', 'J_MERK', 'J_HARGA', 'J_WARNA', 'J_STOK','J_UKURAN', 'J_DESKRIPSI', 'J_FOTO', 'J_DELETE', 'J_KODE'];
    public $primaryKey = "J_SKU";
    //primary key varchar
    public $incrementing=false;

    //timestamp difalse
    public $timestamps = false;

}
