<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class TransaksiModel extends Model
{
    use HasFactory;

    public function insert_transaksi($data){
        // dd($data);
        // query untuk mencari reseller id
        $email = $data['email'];
        $rid ="select R_ID from reseller where R_EMAIL='".$email."';";
        $reseller_id = DB::select($rid);

        //  untuk menghitung total harga
        $total_harga = (double)$data['hargaproduk']*(double)$data['jumlahproduk'];

        // query untuk mencari diskon
        $disc = "Select M_DISKON from membership where M_ID = (Select M_ID from reseller where R_EMAIL ='".$email."');";
        $diskon = DB::select($disc);

        // cari totalfinal
        $total_final = (double)$total_harga * ((100-(double)$diskon[0]->M_DISKON)/100);
        // dd($reseller_id, $total_harga, $diskon, $total_final, $ngecek);
        $cmd = "CALL pInsertTransaksiPembelian(fGENBeliID(),0, curdate(), 'jumlahproduk', 'total_harga', 'diskon', 'total_final',0,0)";
        $data = [
            'namaproduk'  => $data['namaproduk'],
            'hargaproduk'  => $data['hargaproduk'],
            'warnaproduk'     => $data['warnaproduk'],
            'ukuranproduk'    => $data['ukuranproduk'],
            'deskripsiproduk'     => $data['deskripsiproduk'],
            'jumlahproduk'     => $data['jumlahproduk'],
            'email' =>  $data['email']
        ];
        $res = DB::insert($cmd,$data);
        return $res;
    }
}
