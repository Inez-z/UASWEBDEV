<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Men;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
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
        return view("detail", [
            "nama" => $item->J_MERK,
            "i" => $item
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
    // public function addDetailBuy(Request $request, $sku){
    //     $request->validate([
    //         "inputQuantity"=>"numeric"
    //     ]);
    //     $item = Item::query()->findOrFail($sku);

    // }
}
