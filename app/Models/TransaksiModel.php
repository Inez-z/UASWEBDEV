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

        // query untuk panggil func beli id
        $bid ="select fGENBeliID() as `bid`";
        $beli_id = DB::select($bid);
        // dd($beli_id);

        // query untuk mencari reseller id
        $email = $data['email'];
        $rid ="select R_ID from reseller where R_EMAIL='".$email."';";
        $reseller_id = DB::select($rid);

        //  untuk menghitung total harga
        $total_harga = (double)$data['hargaproduk']*(double)$data['jumlahproduk'];

        $jumlahproduk = $data['jumlahproduk'];

        // query untuk mencari diskon
        $disc = "Select M_DISKON from membership where M_ID = (Select M_ID from reseller where R_EMAIL ='".$email."');";
        $diskon = DB::select($disc);

        // cari totalfinal
        $total_final = (double)$total_harga * ((100-(double)$diskon[0]->M_DISKON)/100);

        $tanggal = date("Y-m-d");
        // dd($tanggal);
        //  dd($reseller_id[0], $total_harga, $diskon, $total_final);
        // dd($reseller_id[0]->R_ID,$total_harga, $diskon[0]->M_DISKON, $total_final);

        //cari SKU
        $kode = $data['kode'];
        $s ="select J_SKU, J_WARNA, J_MERK from jam_tangan where J_KODE='".$kode."';";
        $produk = DB::select($s);

        $data = [
            'namaproduk'  => $data['namaproduk'],
            'hargaproduk'  => $data['hargaproduk'],
            'warnaproduk'     => $data['warnaproduk'],
            'ukuranproduk'    => $data['ukuranproduk'],
            'deskripsiproduk'     => $data['deskripsiproduk'],
            'jumlahproduk'     => $data['jumlahproduk'],
            'email' =>  $data['email']
        ];

        $datacart = DB::table('cart')->where('R_ID', $reseller_id[0]->R_ID)->get();
        $check = false;
        //kalo udh ada tinggal nambahin qty
        foreach ($datacart as $d) {
            if ($d ->J_SKU == $produk[0]->J_SKU) {
                $d -> J_STOK = $d -> J_STOK + (double)$data['jumlahproduk'];
                $check = true;
            }
        }
        // dd($check);
        //kalo blm ada diinsert
        if (!$check) {
            //insert cart
            $insertcart = "CALL pInsertCart('".$reseller_id[0]->R_ID."','".$produk[0]->J_SKU."','".$produk[0]->J_MERK."',".$total_harga.",".$jumlahproduk.",'".$produk[0]->J_WARNA."','".$kode."')";
            $res = DB::insert($insertcart);
            return $res;
        }
        //kalo ada diupdate
        else {

            DB::table('cart')
            ->where([
                ['R_ID', '=', $reseller_id[0]->R_ID],
                ['J_SKU', '=', $produk[0]->J_SKU]
                ])
            ->update(['J_STOK' => $d -> J_STOK]);

        }


        // $cmd = "CALL pInsertTransaksiPembelian('".$beli_id[0]->bid."', '".$reseller_id[0]->R_ID."','".$tanggal."',".$jumlahproduk.", ".$total_harga.",". $diskon[0]->M_DISKON.",".$total_final.",'0','0')";



        // $cmd2 = "CALL pInsertDetailBeli(fGENBeliID(), '".$reseller_id[0]->R_ID."','".$tanggal."',".$jumlahproduk.", ".$total_harga.",". $diskon[0]->M_DISKON.",".$total_final.",'0','0')";
    }
}
