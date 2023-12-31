<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
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




Route::middleware(['guest'])->group(function () {
 Route::get('/user_login',[UserController::class ,  'loginFrom'])->name('login');
 Route::post('/user_login',[UserController::class ,  'loginUser'])->name('user.login');

 Route::get('/user_register',[UserController::class ,  'userRegister'])->name('user.register');
 Route::post('/user_register',[UserController::class ,  'store'])->name('user.store');



});




Route::middleware(['auth'])->group(function () {
Route::resource('/products',ProductController::class);
Route::resource('/images',ImageController::class);

Route::get('/', function () {
    return redirect()->back();
})->name('home');

Route::get('/contact', function () {
    $categories = Category ::get();
    $products = Product ::get();
    return view('pages.contact', compact('products','categories'));
});
Route::post('/logout',[UserController::class ,  'logout'])->name('user.logout');
});


