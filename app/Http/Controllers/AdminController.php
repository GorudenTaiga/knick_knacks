<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tampil(Request $request)
    {
        return view('contents.admin.tampilan', [
            'isi' => Produk::all(),
            'title' => "Admin"
        ]);
    }
}
