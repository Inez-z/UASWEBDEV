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

Route::get("/women", [ShopController::class, "WomenWatches"]);

Route::get("/kids", [ShopController::class, "KidsWatches"]);

Route::get("/bestseller", [ShopController::class, "list"]);

Route::get("/all", [ShopController::class, "list"]);

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::post('/sign-in2','App\Http\Controllers\SignUpController@authentication');

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/detail', function () {
    return view('detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

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

Route::post('/sign-up/insert', 'App\Http\Controlers\SignUpController@insert');
