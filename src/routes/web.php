<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MypageController;

use Illuminate\Support\Facades\Route;


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

Route::get('/', [ItemController::class, 'index'])->name('products.index');
Route::get('/mypage', fn() => 'マイページ')->name('mypage');
Route::get('/sell', fn() => '出品ページ')->name('sell');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/item/{id}', function ($id) {
    return "商品詳細ページ（ID: {$id}）";
})->name('item.show');

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [MypageController::class, 'show'])->name('mypage.show');
    Route::get('/mypage/profile', [MypageController::class, 'edit'])->name('mypage.edit');
    Route::post('/mypage/profile', [MypageController::class, 'update'])->name('mypage.update');
});
