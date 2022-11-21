<?php

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
    Route::prefix('/product')->group(function () {
        /* Route 1 Link */
        Route::get('/', [ProdukController::class, 'index']);

        /* Route 2 Link */
        Route::get('/product/{id}', [ProdukController::class, 'show']);
        Route::get('/tambah', [ProdukController::class, 'tambah'])->name('tambah');


        /* Route 3 Link ++ */
        Route::post('/tambah', [ProdukController::class, 'store'])->name('simpan');
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

Route::get('/admin', function () {
    return view('contents.admin.tampilan');
});

Route::get('/tampilanadmin', function () {
    return view('')
})
