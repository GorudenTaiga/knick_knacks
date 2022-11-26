<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use Illuminate\Http\Requests;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Http\Request;

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
        if ($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name.'.'.$ext;
                $upload_path = 'public/foto_produk/';
                $img_url = $upload_path.$image_fullname;
                $file->move($upload_path, $image_fullname);
                $image[] = $img_url;
            }
        };
        Produk::insert([
            'nama' => $request->nama,
            'detail' => $request->detail,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'image' => implode('|', $image)
        ]);
        return redirect('/admin/tambah');
    }

    public function tambah(){
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
        $isi = Produk::where('id', $id)->get();
        foreach ($isi as $judul){
            return view('contents.user.detail', [
                'title' => $judul->nama,
                'isi' => $isi
            ]);
        }
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
        Produk::where('id', $id)->update();
        return redirect('/admin');
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
