<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Item;
use App\Models\TransaksiModel;
use App\Models\Men;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Session;
use DB;


class ShopController extends Controller
{
    public function list(){
        //untuk builder model pagination
        $items = DB::table('jam_tangan')
            ->paginate(6);
        return view("welcome", compact('items'));
    }
    public function MenWatches(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'M%')
                ->paginate(6);
        return view("men", [
            "items" => $items
        ]);
    }
    public function men_lowprice(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'M%')
                ->orderBy('J_HARGA')
                ->paginate(6);
        return view("men", [
            "items" => $items
        ]);
    }
    public function men_highprice(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'M%')
                ->orderBy('J_HARGA','desc')
                ->paginate(6);
        return view("men", [
            "items" => $items
        ]);
    }
    public function WomenWatches(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'W%')
                ->paginate(6);
        return view("women", [
            "items" => $items
        ]);
    }
    public function women_lowprice(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'W%')
                ->orderBy('J_HARGA')
                ->paginate(6);
        return view("women", [
            "items" => $items
        ]);
    }
    public function women_highprice(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'W%')
                ->orderBy('J_HARGA','desc')
                ->paginate(6);
        return view("women", [
            "items" => $items
        ]);
    }

    public function KidsWatches(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'K%')
                ->paginate(6);
        return view("kids", [
            "items" => $items
        ]);
    }
    public function kids_lowprice(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'K%')
                ->orderBy('J_HARGA')
                ->paginate(6);
        return view("kids", [
            "items" => $items
        ]);
    }
    public function kids_highprice(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'K%')
                ->orderBy('J_HARGA','desc')
                ->paginate(6);
        return view("kids", [
            "items" => $items
        ]);
    }
    public function detail($sku){
        $item = DB::table('jam_tangan')
        ->where('J_KODE', $sku)
        ->first();
        // dd($item);
        $email=Session::get('login');
        $rid ="select R_ID from reseller where R_EMAIL='".$email."';";
        $reseller_id = DB::select($rid);
        // dd($reseller_id);
        return view("detail", [
            "nama" => $item->J_MERK,
            "i" => $item,
            "sku" => $sku,
            "email"=> $email
        ]);
    }

    public function welcome_lowprice(){
        $items = DB::table('jam_tangan')
        ->orderBy('J_HARGA')
        ->paginate(6);

        // dd($items);
        return view("welcome", compact('items'));
    }
    public function welcome_highprice(){
        $items = DB::table('jam_tangan')
        ->orderBy('J_HARGA','desc')
        ->paginate(6);

        // dd($items);
        return view("welcome", compact('items'));
    }
    public function buynow($sku){
        $item = DB::table('jam_tangan')
        ->where('J_KODE', $sku)
        ->first();
        // dd($item);
        return view("checkout", [
            "nama" => $item->J_MERK,
            "i" => $item
        ]);
    }
    public function deletecart($sku){
        error_log("hai");
        $email=Session::get('login');

        $rid ="select R_ID from reseller where R_EMAIL='".$email."';";
        $reseller_id = DB::select($rid);

        $delete = DB::table('cart')->where('J_KODE', '=', $sku, 'and', 'R_ID', '=', $reseller_id)->delete();

        $disc = "Select M_DISKON from membership where M_ID = (Select M_ID from reseller where R_EMAIL ='".$email."');";
        $diskon = DB::select($disc);

        $cart = DB::table('cart')->where('R_ID', $reseller_id[0]->R_ID)->get();

        //  untuk menghitung total harga
        $total_harga = (double)$data['hargaproduk']*(double)$data['jumlahproduk'];

        // cari totalfinal
        $total_final = (double)$total_harga * ((100-(double)$diskon[0]->M_DISKON)/100);

        // dd($total_harga, $total_final);
        return view("cart", [
            "cart" => $cart,
            "diskon" => $diskon[0]->M_DISKON,
            "totalharga" => $total_harga,
            "totalfinal" => $total_final
        ]);
    }
    public function transaksi(Request $req){
        error_log("hai");
        $email=Session::get('login');
        $tanggal=
        $data = [
            'namaproduk'=>$req->namaproduk,
            'hargaproduk'  => $req->hargaproduk,
            'warnaproduk'     => $req->warnaproduk,
            'ukuranproduk'    => $req->ukuranproduk,
            'deskripsiproduk'     => $req->deskripsiproduk,
            'jumlahproduk'     => $req->jumlahproduk,
            'email' => $email,
            'kode'     => $req->kode
        ];

        // dd($data);
        $usr = new TransaksiModel();
        $res = $usr->insert_transaksi($data);

        $rid ="select R_ID from reseller where R_EMAIL='".$email."';";
        $reseller_id = DB::select($rid);

        $disc = "Select M_DISKON from membership where M_ID = (Select M_ID from reseller where R_EMAIL ='".$email."');";
        $diskon = DB::select($disc);

        $cart = DB::table('cart')->where('R_ID', $reseller_id[0]->R_ID)->get();

        //  untuk menghitung total harga
        $total_harga = (double)$data['hargaproduk']*(double)$data['jumlahproduk'];

        // cari totalfinal
        $total_final = (double)$total_harga * ((100-(double)$diskon[0]->M_DISKON)/100);

        // dd($total_harga, $total_final);
        return view("cart", [
            "cart" => $cart,
            "diskon" => $diskon[0]->M_DISKON,
            "totalharga" => $total_harga,
            "totalfinal" => $total_final
        ]);

    }

    // public function show_cart($data)
    // {
    //     $email=Session::get('login');

    // }
    // public function addDetailBuy(Request $request, $sku){
    //     $request->validate([
    //         "inputQuantity"=>"numeric"
    //     ]);
    //     $item = Item::query()->findOrFail($sku);

    // }

    //searching
    public function index()
    {
        $items = DB::table('jam_tangan')
        ->orderBy('J_HARGA','desc')
        ->where('J_MERK','like','%' . request('search') . '%')
        ->paginate(6);

        // if(request('search')) {
            // $items->where('J_MERK','like','%' . request('search') . '%');

        // }
        // dd($items);
        return view("posts", compact('items'));
    }
}
