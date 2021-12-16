<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function list(){
        //untuk builder model pagination
        $items = Item::query()->paginate(6);

        return view("welcome", [
            "items" => $items
        ]);
    }
}
