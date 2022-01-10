<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function insert($data){
        $cmd = "CALL pInsertDetaikBeli(:idbeli, :sku, :qty, :price, :delete)";
        $res = DB::insert($cmd,$data);
        return $res;
    }
}
