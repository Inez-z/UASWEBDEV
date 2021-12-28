<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Men;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
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
                ->get();
        return view("men", [
            "items" => $items
        ]);
    }
    public function WomenWatches(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'W%')
                ->get();
        return view("women", [
            "items" => $items
        ]);
    }
    public function KidsWatches(){
        $items = DB::table('jam_tangan')
                ->where('J_SKU', 'like', 'K%')
                ->get();
        return view("kids", [
            "items" => $items
        ]);
    }
}
