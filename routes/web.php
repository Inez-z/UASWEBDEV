<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/welcome", [ShopController::class, "list"]);

Route::prefix("/men")->group(function(){
    Route::get("/", [ShopController::class, "MenWatches"]);
Route::get("/detail/{sku}", [ShopController::class, "detail"]);
});

Route::prefix("/women")->group(function(){
    Route::get("/", [ShopController::class, "WomenWatches"]);
Route::get("/detail/{sku}", [ShopController::class, "detail"]);
});

Route::prefix("/kids")->group(function(){
    Route::get("/", [ShopController::class, "KidsWatches"]);
Route::get("/detail/{sku}", [ShopController::class, "detail"]);
});

Route::get("/bestseller", [ShopController::class, "list"]);

Route::prefix("/all")->group(function(){
    Route::get("/", [ShopController::class, "list"]);
Route::get("/detail/{sku}", [ShopController::class, "detail"]);
});

Route::get("/checkout/{sku}", [ShopController::class, "buynow"]);

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::post('/sign-in2','App\Http\Controllers\SignUpController@authentication');

Route::get('/profile','App\Http\Controllers\SignUpController@profile');

Route::post('/editprofile','App\Http\Controllers\SignUpController@editprofile');

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/checkout', function () {
//     return view('checkout');
// });

Route::get('/editprofile', function () {
    return view('editprof');
});

Route::get('/invoice', function () {
    return view('invoice');
});

// Route::get('men', function (){
//     return view('men');
// });
// Route::get('women', function (){
//     return view('women');
// });
// Route::get('kids', function (){
//     return view('kids');
// });
// Route::get('all', function (){
//     return view('all');
// });
// Route::get('bestseller', function (){
//     return view('bestseller');
// });

Route::post('/sign-up/insert', 'App\Http\Controllers\SignUpController@insert');
