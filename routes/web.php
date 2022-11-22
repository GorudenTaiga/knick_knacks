<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('contents.user.index', [
        "title" => "Home"
    ]);
});

Route::group(['middleware' => ['auth']], function () {
    //Kumpulan Tampilan User
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProdukController::class, 'index']);
        Route::get('/{id}', [ProdukController::class, 'show']);
        Route::get('/{id}/checkout');
    });
    Route::prefix('/user')->group(function () {
        Route::get('/');
        Route::get('/cart');
        Route::get('/checkout');
    });

    //Kumpulan Tampilan Admin
    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'tampil']);
        Route::get('/tambah', [ProdukController::class, 'tambah']);
        Route::post('/tambah', [ProdukController::class, 'store'])->name('simpan');
        Route::get('/{id}', [ProdukController::class, 'show'])->name('show');
    });
});

Route::get('/login', function () {
    return view('contents.login');
})->name('login');

Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');

Route::get('/register', function () {
    return view('contents.register');
})->name('register');

Route::post('/register', [LoginController::class, 'postRegister'])->name('postregister');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::prefix('/template')->group(function () {
    Route::get('/', function () {
        return view('Template.Home');
    });
    Route::get('/produk', function () {
        return view('Template.PaketnussaA');
    });
});
