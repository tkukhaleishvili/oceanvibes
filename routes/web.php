<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/menus', function () {
    //$categories = Category ::get();
    //$products = Product ::get()
   
    //return view('pages.menus', compact('products','categories'));

//});
 Route::resource('pages/products',ProductController::class);


Route::get('pages/contact', function () {
    $categories = Category ::get();
    $products = Product ::get();
    return view('pages.contact', compact('products','categories'));
});
