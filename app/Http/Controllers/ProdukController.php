<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use Illuminate\Http\Requests;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.user.products', [
            "title" => "Product",
            "isi" => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name . '.' . $ext;
                $upload_path = 'public/foto_produk/';
                $img_url = $upload_path . $image_fullname;
                $file->move($upload_path, $image_fullname);
                $image[] = $img_url;
            }
        };
        Produk::insert([
            'nama' => $request->nama,
            'detail' => $request->detail,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'image' => $img_url /* implode('|', $image) */
        ]);
        return redirect('/admin/tambah');
    }

    public function tambah()
    {
        return view('contents.admin.tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('contents.user.detail', [
            'isi' => Produk::where('id', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('contents.admin.edit', [
            'produk' => Produk::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateProdukRequest $request)
    {
        $carigambar = Produk::where('id', $id)->get()->first();
        if ($file = $request->file('image')) {
            if ($carigambar->image != '' && $carigambar->image != null) {
                $file_old = 'public/foto_produk'.$carigambar->image;
                unlink($file_old);
            }
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $path = 'public/foto_produk/';
            $file->move($path.$image_fullname);
        }
        $data = $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'image|required|mimes:png,jpg,jpeg'
        ]);
        $update = Produk::where('id',$id)->update($data);
        if ($update) return redirect('/admin');
        /* dd($request->all()); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
